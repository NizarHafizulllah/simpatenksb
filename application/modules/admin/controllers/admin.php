<?php 


class admin extends admin_controller {
	
	var $controller;
	public function admin(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		



		$data_array=array();

		$userdata = $this->session->userdata('admin_login');

		$this->db->where('id_kecamatan', $userdata['kecamatan']);
		$data = $this->db->get('profil_kecamatan');


		if ($data->num_rows()>0) {
			$data_array = $data->row_array();
		}else{
			$data_array['id_kecamatan'] = $userdata['kecamatan'];
			$data_array['tentang'] = '';
			
		}

		$data_array['curPage'] = '';


		$content = $this->load->view("admin/admin_view",$data_array,true);

		$this->set_subtitle("Beranda");
		$this->set_title("Beranda");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>