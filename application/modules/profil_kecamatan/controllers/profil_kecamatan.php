<?php 


class profil_kecamatan extends admin_controller {
	
	var $controller;
	public function profil_kecamatan(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		
		$userdata = $this->session->userdata('admin_login');
		$data_array=array();

		$id = $userdata['id_user'];

		$data_array['curPage'] = '';
		


		$this->db->select('a.*, kc.kecamatan as kecamatan')->from("admin a");
		 $this->db->join('tiger_kecamatan kc','a.kecamatan=kc.id', 'left');
		$this->db->where('a.id', $id);

		$res = $this->db->get()->row_array();

		// show_array($res);
		// exit();



		$data_array['user'] = $res;

		// show_array($data_array);
		// exit();

		
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("PROFIL");
		$this->set_title("PROFIL");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


	function kecamatan(){
		
		$userdata = $this->session->userdata('admin_login');
		$data_array=array();

		$id = $userdata['id_user'];

		


		// echo $res['kecamatan'];

		$this->db->where('id_kecamatan', $userdata['kecamatan']);
		$data = $this->db->get('profil_kecamatan');


		if ($data->num_rows()>0) {
			$data_array = $data->row_array();
		}else{
			$data_array['id_kecamatan'] = $userdata['kecamatan'];
			$data_array['tahun_pembentukan'] = '';
			$data_array['nama_camat'] = '';
			$data_array['nip_camat'] = '';
			$data_array['no_perda_pembentukan'] = '';
			$data_array['alamat_kecamtan'] = '';

			
		}


		$data_array['curPage'] = '';
		


		
		
		$this->db->select('a.*, kc.kecamatan as kecamatan')->from("admin a");
		 $this->db->join('tiger_kecamatan kc','a.kecamatan=kc.id', 'left');
		 $this->db->where('a.id', $id);
		$data_array['user'] = $this->db->get('admin')->row_array();
		// $data_array['user'] = $res;

		// show_array($data_array);
		// exit();

		
		$content = $this->load->view("kecamatan_view",$data_array,true);

		$this->set_subtitle("Data Kecamatan");
		$this->set_title("Data Kecamatan");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


	function konfirm_password(){
		$this->load->library('session');

		$data = $this->input->post();

		if (!empty($data['p1'])) {
			if ($data['p1']!=$data['p2']) {
				$error = 'true';
				
				// exit();
			}else{
				$data['password'] = md5($data['p1']);
				unset($data['p1']);
				unset($data['p2']);
				$error = 'false';
			}
		}else{
			unset($data['p1']);
			unset($data['p2']);
			$error = 'false';
		}

if ($error=='true') {
	$arr = array("error"=>true, 'message'=> ' Ulangi Password Baru Tidak Cocok dengan Password Baru Yang Anda Masukkan Sebelumnnya');
}else{

			$this->session->unset_userdata('data_edit');

		$userdata = $this->session->userdata('admin_login');
		$data_array=array();

		$id = $userdata['id_user'];

		$this->session->set_userdata('data_edit',$data);

		$data_edit = $this->session->userdata('data_edit');


		$this->db->select('a.*, kc.kecamatan as kecamatan')->from("admin a");
		 $this->db->join('tiger_kecamatan kc','a.kecamatan=kc.id', 'left');
		$this->db->where('a.id', $id);





		$data_asli = $this->db->get()->row_array();

		if (!empty($data_edit['password']) && $data_edit['password'] != $data_asli['password']) {
			$data_edit['status_password'] = "Berubah";
		}else{
			$data_edit['status_password'] = "Tidak Berubah";
		}



		if ($data_edit['email'] == $data_asli['email']) {
			$data_edit['status_email'] = "Tidak Berubah";
		}else{
			$data_edit['status_email'] = "Berubah";
		}

		if ($data_edit['nama'] == $data_asli['nama']) {
			$data_edit['status_nama'] = "Tidak Berubah";
		}else{
			$data_edit['status_nama'] = "Berubah";
		}

		if ($data_edit['no_hp'] == $data_asli['no_hp']) {
			$data_edit['status_no_hp'] = "Tidak Berubah";
		}else{
			$data_edit['status_no_hp'] = "Berubah";
		}

		if ($data_edit['alamat'] == $data_asli['alamat']) {
			$data_edit['status_alamat'] = "Tidak Berubah";
		}else{
			$data_edit['status_alamat'] = "Berubah";
		}


		
		$arr = array("error"=>false, 'data_edit'=>$data_edit);
		}
		

			

			echo json_encode($arr);

		}


		function simpan(){

			$post = $this->input->post();

			$userdata = $this->session->userdata('admin_login');
			$id_user = $userdata['id_user'];

			$data_edit = $this->session->userdata('data_edit');

			$this->load->library('form_validation');
        	$this->form_validation->set_rules('password','Password','required');  
       
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');


        

        
     	  
        
       
	if($this->form_validation->run() == TRUE ) {

		$this->db->where('id', $id_user);
		$data_asli = $this->db->get('admin')->row_array();
		if ($data_asli['password'] != md5($post['password'])) {
			$arr = array("error"=>true,'message'=>"Password Salah");
		}else{



        $this->db->where('id', $id_user);
        $res = $this->db->update('admin', $data_edit); 
        // echo $this->db->last_query();

        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
            $this->db->select("a.*, kec.kecamatan as nama_kecamatan")
		 ->from("admin a")
		 ->join("tiger_kecamatan kec","kec.id=a.kecamatan","left");
            $this->db->where('a.id', $id_user);
            $user = $this->db->get()->row_array();
            $jj = array (
					'login' => true,
					'id_user' => $user['id'],
					'nama' => $user['nama'],
					'level' => $user['level'],
					'id_kecamatan' => $user['kecamatan'],
					'kecamatan' => $user['nama_kecamatan'],
					);
            // $jj['login'] = true;
            $this->session->set_userdata('admin_login', $jj);
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

	function simpan_data(){


    $post = $this->input->post();

    // show_array($post);
    // exit();
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_camat','Nomor registrasi','required');
        $this->form_validation->set_rules('nip_camat','Nama Pemohon','required');
        $this->form_validation->set_rules('tahun_pembentukan','Alamat','required');
        $this->form_validation->set_rules('no_perda_pembentukan','Syarat umum pertama','required');
        
          
         
        $this->form_validation->set_message('required', ' Harap isi semua data');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        // show_array($data);

if($this->form_validation->run() == TRUE ) { 

        
        $this->db->where('id_kecamatan', $post['id_kecamatan']);
        $cari = $this->db->get('profil_kecamatan');

        if ($cari->num_rows()>0) {

        	$this->db->where('id_kecamatan', $post['id_kecamatan']);
        	$res = $this->db->update('profil_kecamatan', $post);
        	if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DIUPDATE");
        }
        }else{
        	$res = $this->db->insert('profil_kecamatan', $post); 
        	if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
        	}
        		else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        	}
        }
        
        
        
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
}	
			

		

	


}
?>