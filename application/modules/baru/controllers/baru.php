<?php 


class baru extends admin_controller {
	
	var $controller;
	public function baru(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		



		$data_array=array();

		$data_array = array(
								);

		$content = $this->load->view("baru/baru_view",$data_array,true);

		$this->set_subtitle("BARU");
		$this->set_title("BARU");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>