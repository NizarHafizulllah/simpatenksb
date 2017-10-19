<?php 


class operator_kecamatan extends operator_controller {
	
	var $controller;
	public function operator_kecamatan(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		



		$data_array=array();

		$userdata = $this->session->userdata('op_login');

		$this->db->where('id_kecamatan', $userdata['kecamatan']);
		$data = $this->db->get('profil_kecamatan');


		if ($data->num_rows()>0) {
			$data_array = $data->row_array();
		}else{
			$data_array['id_kecamatan'] = $userdata['kecamatan'];
			$data_array['tentang'] = '';
			
		}

		$data_array['curPage'] = '';


		$content = $this->load->view("operator_kecamatan/operator_kecamatan_view",$data_array,true);

		$this->set_subtitle("Beranda");
		$this->set_title("Beranda");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>