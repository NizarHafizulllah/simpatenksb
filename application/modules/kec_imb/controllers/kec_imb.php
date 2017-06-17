<?php 


class kec_imb extends admin_controller {
	
	var $controller;
	public function kec_imb(){
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller.'_model','dm');
		$this->load->helper("tanggal");
	}
	



	function index(){
		
		$data_array=array();

	 

		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("SIMPATEN");
		$this->set_title("IMB");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}

	 function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $nama_pemohon = $_REQUEST['columns'][1]['search']['value'];
        $no_regis = $_REQUEST['columns'][2]['search']['value'];
        
        $userdata = $this->session->userdata('admin_login');
        $id_kecamatan = $userdata['id_kecamatan']; 



      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
				"no_regis" => $no_regis,
                "nama_pemohon" => $nama_pemohon,
                "id_kecamatan" => $id_kecamatan
				
				 
		);   

		// show_array($req_param);
  //       exit();  
           
        $row = $this->dm->data($req_param)->result_array();


		
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       
        $arr_data = array();
        foreach($result as $row) : 
		$id = $row['no_regis'];

        $action = "<div class='btn-group'>
                              <button type='button' class='btn btn-primary'>Action</button>
                              <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span>
                                <span class='sr-only'>Toggle Dropdown</span>
                              </button>
                              <ul class='dropdown-menu' role='menu'>
                                <li><a href='#' onclick=\"hapus('$id')\" ><i class='fa fa-trash'></i> Hapus</a></li>
                                <li><a href='bj_jenis/editdata?id=$id'><i class='fa fa-edit'></i> Edit</a></li>
                              </ul>
                            </div>";
        	
        	 
        	$arr_data[] = array(
        		$row['no_regis'],
        		$row['nama_pemohon'],
        		$row['tgl_verifikasi'],
        		$row['nama_petugas_verifikasi'],
        	   $action
        		
         			 
        		  				);
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
        				  'recordsTotal' => $count, 
        				  'recordsFiltered' => $count,
        				  'data'=>$arr_data
        	);
         
        echo json_encode($responce); 
    }


    function baru(){

    	$data_array=array();
    
        $data_array['action'] = 'simpan';

        $content = $this->load->view($this->controller."_form_view",$data_array,true);
       $this->set_subtitle("SIMPATEN");
		$this->set_title("Tambah IMB");
		$this->set_content($content);
		$this->cetak();
    }



    function simpan(){


    $post = $this->input->post();

    // show_array($post);
    // exit();
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_regis','Nomor registrasi','required');
        $this->form_validation->set_rules('nama_pemohon','Nama Pemohon','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('pimb','Syarat umum pertama','required');
        $this->form_validation->set_rules('ktp','Syarat umum kedua','required');
        $this->form_validation->set_rules('foto','Syarat umum ketiga','required');
        $this->form_validation->set_rules('sertifikat_tanah','Syarat umum keempat','required');
        $this->form_validation->set_rules('pbb','Syarat umum kelima','required');
        $this->form_validation->set_rules('bap','Syarat umum keenam','required');
        $this->form_validation->set_rules('penelitian_tanah','Syarat umum ketujuh','required');
        $this->form_validation->set_rules('setuju_sempada_tanah','Syarat umum kedelapan','required');
        $this->form_validation->set_rules('rekom_dishub','Syarat umum kesembilan','required');
        $this->form_validation->set_rules('tek_gamabar_rencana','Syarat teknis pertama','required');
        $this->form_validation->set_rules('tek_instalasi_air','Syarat teknis kedua','required');
        $this->form_validation->set_rules('tek_penelitian_tanah','Syarat teknis ketiga','required');
        $this->form_validation->set_rules('tek_pengaman','Syarat teknis keempat','required');
        $this->form_validation->set_rules('sistem_drainase','Syarat teknis kelima','required');
        $this->form_validation->set_rules('nama_petugas_verifikasi','Syarat teknis kelima','required');
        $this->form_validation->set_rules('tgl_verifikasi','Syarat teknis kelima','required');
          
         
        $this->form_validation->set_message('required', ' Harap isi semua data');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $userdata = $this->session->userdata('admin_login');
        $post['kecamatan'] = $userdata['id_kecamatan'];
        $post['kabupaten'] = '52_7';
        $post['tgl_verifikasi'] = flipdate($post['tgl_verifikasi']);
        
        
        $res = $this->db->insert('imb', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
}


 


}
?>