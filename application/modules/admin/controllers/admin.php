<?php 


class admin extends admin_controller {
	
	var $controller;
	public function admin(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		



		$data_array=array();

		$data_array = array(
								);

		$content = $this->load->view("admin/admin_view",$data_array,true);

		$this->set_subtitle("DATA ADMIN");
		$this->set_title("BARU");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>