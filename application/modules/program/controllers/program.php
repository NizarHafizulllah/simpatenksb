<?php 
class program extends admin_controller{
	var $controller;
	function program(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('program_model','dm');
        $this->load->model("coremodel","cm");
        $this->load->helper("tanggal");
		
		//$this->load->helper("serviceurl");
		
	}


function index(){
		$data_array=array();

        

		$this->db->order_by("id", "ASC");
		$rs = $this->db->get("klaster")->result();
		
		$data_array['arr_klaster'] = $rs;

		$content = $this->load->view("program_view",$data_array,true);

		$this->set_subtitle("Program");
		$this->set_title("Program");
		$this->set_content($content);
		$this->cetak();
}


function baru(){
        $data_array=array();


        $data_array['action'] = 'simpan';

        $data_array['arr_klaster'] = $this->cm->arr_dropdown("klaster", "id", "klaster", "klaster");
       
        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah Program");
        $this->set_title("Tambah Program");
        $this->set_content($content);
        $this->cetak();
}





function simpan(){


    $post = $this->input->post();
    
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('program','Nama program','required');  
              
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

        $post['jumlah_pagu'] = bersih($post['jumlah_pagu']); 
       
        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        
        $res = $this->db->insert('program', $post); 
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




    function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $klaster = $_REQUEST['columns'][1]['search']['value'];
        $program = $_REQUEST['columns'][2]['search']['value'];
        $tahun = $_REQUEST['columns'][3]['search']['value'];





      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
                "klaster" => $klaster,
                "program" => $program,
                "tahun" => $tahun
				
				 
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
            $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i>Hapus</a>
            <a href ='$this->controller/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
       	
        	 
        	$arr_data[] = array(
        		$x+1,
        		$row['klaster'],     		 
        		$row['program'],     		 
        		substr($row['keterangan'], 0, 150).'...',     		 
        		$row['tahun'],     		 
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
    	 $rs = $this->db->get('program')->row_array();
    	 $data = $rs;

		
        $data['arr_klaster'] = $this->cm->arr_dropdown("klaster", "id", "klaster", "klaster");
         

        $data['action'] = 'update';
         
		$content = $this->load->view($this->controller."_form_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

		$this->set_subtitle("Edit program");
		$this->set_title("Edit program");
		$this->set_content($content);
		$this->cetak();

    }





function update(){

    $post = $this->input->post();
   
       


        $this->load->library('form_validation');

        $this->form_validation->set_rules('program','Nama program','required');       
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

        
        $post['jumlah_pagu'] = bersih($post['jumlah_pagu']); 

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 


        $this->db->where("id",$post['id']);
        $res = $this->db->update('program', $post); 
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

    	$res = $this->db->delete('program', $data);
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