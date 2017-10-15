<?php 
class op_add_kecamatan extends operator_controller{
	var $controller;
	function op_add_kecamatan(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model($this->controller.'_model','dm');
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}

	function index(){
		$data_array=array();
        $data_array['curPage'] = 'user';
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Pengguna");
		$this->set_title("Pengguna");
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
        
  
        $nama = $_REQUEST['columns'][1]['search']['value'];

        $userdata = $this->session->userdata('op_login');
        $kecamatan = $userdata['id_kecamatan']; 



      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
				"nama" => $nama,
                "kecamatan" => $kecamatan
				
				 
		);     

        // show_array($req_param);
           
        $row = $this->dm->data($req_param)->result_array();
		
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       // show_array($result);
        $arr_data = array();
        foreach($result as $row) : 
		// $daft_id = $row['daft_id'];
        $id = $row['id'];

        $action = "<div class='btn-group'>
                              <button type='button' class='btn btn-primary'>Action</button>
                              <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span>
                                <span class='sr-only'>Toggle Dropdown</span>
                              </button>
                              <ul class='dropdown-menu' role='menu'>
                                <li><a href ='#' onclick=\"hapus('$id')\"><i class='fa fa-trash'></i> Hapus</a></li>
                                <li><a href ='$this->controller/editdata?id=$id'><i class='fa fa-edit'></i> Edit</a></li>
                              </ul>
                            </div>";

        
        if ($row['level']==1) {
        	$level = 'Admin Kecamatan';
        }else if ($row['level']==4) {
        	$level = 'approval Kecamatan';
        }
        	
        	 
        	$arr_data[] = array(
        		$row['id'],
        		$row['nama'],
        		$row['username'],
        		$level,        	
        		$row['kecamatan'],	 
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
        $data_array['curPage'] = 'user_add';

        $data_array['action'] = 'simpan';
        $data_array['form'] = 'form_simpan';

        $data_array['arr_level'] = array('' => '- Pilih Level -',
                                    '1' => 'Admin Kecamatan',
                                    '4' => 'Approval Kecamatan', );

        // show_array($data_array);
        // exit();

        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah Pengguna");
        $this->set_title("Tambah Pengguna");
        $this->set_content($content);
        $this->cetak();
}

	function cekUsername(){
		$username = $this->input->post('username');
        $valid = true;
        $this->db->where('username', $username);
        $jumlah = $this->db->get("admin")->num_rows();    
        if($jumlah == 1) {
            $valid = false;
        }
        
        echo json_encode(array('valid' => $valid));
	}

	function cek_username($username){
    $this->db->where("username",$username);
    if($this->db->get("admin")->num_rows() > 0)
    {
         $this->form_validation->set_message('cek_username', ' %s Sudah Digunakan Oleh Pengguna Lain');
         return false;
    }
}

function cek_username2($username){
    $id = $this->input->post('id');
    
    $this->db->where('id', $id);
    $hasil = $this->db->get('admin')->row_array();
    // echo $this->db->last_query();
    // show_array($hasil);

    if($username != $hasil['username']){
        $this->db->where("username",$username);
        if($this->db->get("admin")->num_rows() > 0)
        {
         $this->form_validation->set_message('cek_username2', ' %s Sudah Digunakan Oleh Pengguna Lain');
         return false;
        }
    }
    
}


	function simpan(){
		$post = $this->input->post();
    
        $userdata = $this->session->userdata('op_login');
        $post['kecamatan'] = $userdata['id_kecamatan']; 


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama','Nama Pengguna','required');    
        $this->form_validation->set_rules('no_hp','Nomor HP','required');   
        $this->form_validation->set_rules('p1','Password','required'); 
        $this->form_validation->set_rules('username','Username','callback_cek_username');    
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     	

        $post['password'] = md5($post['p1']);

        
        unset($post['p1']);
        unset($post['p2']);

        
        
        // show_array($post);
        // exit();
	if($this->form_validation->run() == TRUE ) { 

        
        $res = $this->db->insert('admin', $post); 
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


    function hapusdata(){
        $get = $this->input->post();
        $id = $get['id'];

        $data = array('id' => $id, );

        $res = $this->db->delete('admin', $data);
        if($res){
            $arr = array("error"=>false,"message"=>"DATA BERHASIL DIHAPUS");
        }
        else {
            $arr = array("error"=>true,"message"=>"DATA GAGAL DIHAPUS ".mysql_error());
        }
        //redirect('sa_birojasa_user');
        echo json_encode($arr);
    }



    function editdata(){
         $get = $this->input->get(); 
         $id = $get['id'];

         

         $this->db->where('id',$id);
         $pengguna = $this->db->get('admin');
         $data = $pengguna->row_array();

       
        $data['arr_level'] = array('' => '- Pilih Level -',
                                    '1' => 'Admin Kecamatan',
                                    '4' => 'Approval Kecamatan', );

        $data['action'] = 'update';
        $data['form'] = 'form_update';
        $data['curPage'] = '';
         // show_array($data); exit;
         
        

        // $data_array=array(
        //      'id' => $data->id,
        //      'nama' => $data->nama,
        //      'no_siup' => $data->no_siup,
        //      'no_npwp' => $data->no_npwp,
        //      'no_tdp' => $data->no_tdp,
        //      'telp' => $data->telp,
        //      'alamat' => $data->alamat,
        //      'email' => $data->email,
        //      'hp' => $data->hp,

        //  );
        $content = $this->load->view($this->controller."_form_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

        $this->set_subtitle("Edit Pengguna");
        $this->set_title("Edit Pengguna");
        $this->set_content($content);
        $this->cetak();

    }

    function cek_passwd2($p1){
    $p2 = $this->input->post('p2');
 
    if($p1 <> $p2) {
        $this->form_validation->set_message('cek_passwd2', ' %s tidak sama');
         return false;
    }
}

    function update(){

        $post = $this->input->post();
   
       // show_array($post);
       // exit();


        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama','Nama','required');    
        $this->form_validation->set_rules('no_hp','Nomor HP','required');   
        $this->form_validation->set_rules('username','Username','callback_cek_username2');
        $this->form_validation->set_rules('p1','Password','callback_cek_passwd2'); 
       
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 




        if(!empty($post['p1']) or !empty($post['p2'])) {
            $post['password'] = md5($post['p1']);
        }
        
        unset($post['p1']);
        unset($post['p2']);




        $this->db->where("id",$post['id']);
        $res = $this->db->update('admin', $post); 
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


}
?>