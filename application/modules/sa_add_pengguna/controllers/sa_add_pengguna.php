<?php 
class sa_add_pengguna extends super_admin_controller{
	var $controller;
	function sa_add_pengguna(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('sa_add_pengguna_model','dm');
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}

	function index(){
		$data_array=array();
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


      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
				"nama" => $nama
				
				 
		);     
           
        $row = $this->dm->data($req_param)->result_array();
		
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       
        $arr_data = array();
        foreach($result as $row) : 
		// $daft_id = $row['daft_id'];
        $id = $row['id'];
        $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i>Hapus</a>
        <a href ='$this->controller/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
        if ($row['level']==1) {
        	$level = 'Admin Kecamatan';
        }else if ($row['level']==2) {
        	$level = 'Admin Kabupaten';
        }
        	
        	 
        	$arr_data[] = array(
        		$row['id'],
        		$row['nama'],
        		$row['username'],
        		$level,        	
        		$row['kecamatan'],	 
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





    function baru(){
        $data_array=array();

        $data_array['action'] = 'simpan';
        $data_array['form'] = 'form_simpan';

        $data_array['arr_kecamatan'] = $this->dm->arr_dropdown("tiger_kecamatan", "id", "kecamatan", "kecamatan", "id_kota", "52_7");
        $data_array['arr_level'] = array('' => '- Pilih Level -',
        							'1' => 'Admin Kecamatan',
        							'2' => 'Admin Kabupaten',
        							'3' => 'Super Admin' );

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
    
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama','Nama Pengguna','required');    
        $this->form_validation->set_rules('no_hp','Nomor HP','required');   
        $this->form_validation->set_rules('p1','Password','required'); 
        $this->form_validation->set_rules('username','Username','callback_cek_username');    
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     	if ($post['level']==2) {
     		$post['kecamatan'] = '';
     	}

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

        $data['arr_kecamatan'] = $this->dm->arr_dropdown("tiger_kecamatan", "id", "kecamatan", "kecamatan", "id_kota", "52_7");
        $data['arr_level'] = array('' => '- Pilih Level -',
                                    '1' => 'Admin Kecamatan',
                                    '2' => 'Admin Kabupaten',
                                    '3' => 'Super Admin' );

        $data['action'] = 'update';
        $data['form'] = 'form_update';
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