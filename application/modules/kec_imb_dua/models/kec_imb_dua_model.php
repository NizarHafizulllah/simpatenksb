<?php 

class kec_imb_dua_model extends CI_Model {


	function kec_imb_dua_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"no_regis",
							"nama_pemohon",
							"id_kecamatan"
							
							);


		$this->db->where("kecamatan", $id_kecamatan);

		 $this->db->select('*')->from("imb_dua");


		 

		 if(!empty($no_regis)) {
		 	$this->db->like("no_regis",$no_regis);
		 }

		 if(!empty($nama_pemohon)) {
		 	$this->db->like("nama_pemohon",$nama_pemohon);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}


	


}

?>