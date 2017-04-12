<?php 


class belajar extends admin_controller {
	
	var $controller;
	public function belajar(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		



		$data_array=array();

		$data_array = array(
								);

		$content = $this->load->view("belajar/belajar_views",$data_array,true);

		$this->set_subtitle("BARU");
		$this->set_title("BARU");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>