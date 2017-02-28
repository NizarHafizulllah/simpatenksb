<?php 
class Kegiatan extends admin_controller{
	var $controller;
	function kegiatan(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('kegiatan_model','dm');
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}


function index(){
		$data_array=array();

		$content = $this->load->view("kegiatan_view",$data_array,true);

		$this->set_subtitle("Photo Kegiatan");
		$this->set_title("Photo Kegiatan");
		$this->set_content($content);
		$this->cetak();
}


function baru(){
        $data_array=array();

        $data_array['action'] = 'simpan';
       
       
        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah Photo Kegiatan");
        $this->set_title("Tambah Photo Kegiatan");
        $this->set_content($content);
        $this->cetak();
}





	function simpan(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul','Judul Foto','required');  
		$this->form_validation->set_rules('keterangan','Keterangan Foto','required');  
		// $this->form_validation->set_rules('photo','File Foto','required');  	
			  
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
		$this->form_validation->set_error_delimiters('', '<br>');

		   
			//show_array($data);

		if($this->form_validation->run() == TRUE ) {
			
			$this->load->library('upload');
			$photo = $_FILES['photo']['name'];
			
			$config = array(
				'file_name'    => $photo,
				'upload_path'  => './assets/kegiatan/',
				'allowed_types' => 'jpg|jpeg|png',
				'max_size'      => 2048,
				'max_width'    => 1024,
				'max_height'   => 768
			);
			
			$this->upload->initialize($config);
			
			if(!$this->upload->do_upload('photo')) {
				
				$arr = array("error"=>true,'message'=>$this->upload->display_errors());
				
			} else {
				
				$get_name = $this->upload->data();
				$name = $get_name['file_name'];
				$nama_photo = $name;
				
				// Image Resizing
				$config2 = array(
					'image_library' 	=> 'gd2',
					'source_image' 		=> './assets/kegiatan/'.$nama_photo,
					'new_image'			=> './assets/kegiatan/thumb/',
					'maintain_ratio' 	=> TRUE,
					'width'         	=> 200,
					'height'       		=> 300				
				);
				
				$this->load->library('image_lib', $config2);
				
				if ( ! $this->image_lib->resize()){
					$this->session->set_flashdata('message', $this->image_lib->display_errors('', ''));
				}

				
				
				$post = array(
					'tanggal'		=> date('Y-m-d'),
					'judul'			=> $this->input->post('judul'),
					'keterangan'	=> $this->input->post('keterangan'),
					'photo'			=> $nama_photo
				);
				
				$res = $this->db->insert('kegiatan', $post); 
				if($res){
					$arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
				}
				else {
					 $arr = array("error"=>true,'message'=>"GAGAL  DIUPDATE");
				}
												
			}
			
			
					
		}
		else {
			
			$arr = array("error"=>true,'message'=>validation_errors());
		}
			echo json_encode($arr);
	}




    function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $judul = $_REQUEST['columns'][1]['search']['value'];





      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
                "judul" => $judul,
				
				 
		);     
           
        $row = $this->dm->data($req_param)->result_array();
		
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
        
        $result = $this->dm->data($req_param)->result_array();
        
        $arr_data = array();
        foreach($result as $x => $row) : 
		// $daft_id = $row['daft_id'];
        $id = $row['id'];
        $image = $row['photo'];
		$photo = "<img src='".base_url('assets/kegiatan/thumb/'.$image.'')."' style='width: 200px'>";
            $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i>Hapus</a>
            <!--a href ='$this->controller/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a-->";
       	
        	$arr_data[] = array(
        		$x+1,
        		$row['judul'],     		 
        		$row['keterangan'], 
				$photo,
        		$hapus
         			 
				);
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
        				  'recordsTotal' => $count, 
        				  'recordsFiltered' => $count,
        				  'data'=>$arr_data
        	);
         
        echo json_encode($responce); 
    }

    

    function editdata(){
    	 $get = $this->input->get(); 
    	 $id = $get['id'];

    	 $this->db->where('id',$id);
    	 $rs = $this->db->get('pekerjaan');
    	 $data = $rs->row_array();

         

        $data['action'] = 'update';
         
		$content = $this->load->view($this->controller."_form_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

		$this->set_subtitle("Edit Pekerjaan");
		$this->set_title("Edit Pekerjaan");
		$this->set_content($content);
		$this->cetak();

    }





function update(){

    $post = $this->input->post();
   
       


        $this->load->library('form_validation');

        $this->form_validation->set_rules('pekerjaan','Nama Pekerjaan','required');       
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 


        $this->db->where("id",$post['id']);
        $res = $this->db->update('pekerjaan', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DIUPDATE");
        }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
}



    function hapusdata(){
    	$get = $this->input->post();
    	$id = $get['id'];

    	$data = array('id' => $id, );
		
		$cek = $this->db->get('kegiatan', $data)->row();

			unlink('assets/kegiatan/'.$cek->photo);
			unlink('assets/kegiatan/thumb/'.$cek->photo);
		
    	$res = $this->db->delete('kegiatan', $data);
        if($res){
            $arr = array("error"=>false,"message"=>"DATA BERHASIL DIHAPUS");
        }
        else {
            $arr = array("error"=>true,"message"=>"DATA GAGAL DIHAPUS ".mysql_error());
        }
    	//redirect('sa_birojasa_user');
        echo json_encode($arr);
    }


}

?>