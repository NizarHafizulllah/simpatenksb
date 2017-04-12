<?php 


class admin_add_pengguna extends admin_controller {
	
	var $controller;
	public function admin_add_pengguna(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
	function index(){
		



		$data_array=array();

		$data_array = array();

		$content = $this->load->view("admin_add_pengguna/admin_add_pengguna_view",$data_array,true);

		$this->set_subtitle("Akun");
		$this->set_title("Akun");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>