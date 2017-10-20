<?php 

class kab_siu_model extends CI_Model {


	function kab_siu_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"no_surat",
							"nama_pemohon",
							"id_kecamatan"
							
							);


		 

		 $this->db->select('l.*, k.kecamatan as nm_kecamatan')->from("siu l");
		 $this->db->join('tiger_kecamatan k','l.kecamatan=k.id');

		 
 		if(!empty($kecamatan)) {
		 	$this->db->like("l.kecamatan",$kecamatan);
		 }

		 if(!empty($status)) {
		 	$this->db->like("l.status",$status);
		 }

		 if(!empty($no_regis)) {
		 	$this->db->like("l.no_surat",$no_regis);
		 }

		 if(!empty($nama_pemohon)) {
		 	$this->db->like("l.nama_pemohon",$nama_pemohon);
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