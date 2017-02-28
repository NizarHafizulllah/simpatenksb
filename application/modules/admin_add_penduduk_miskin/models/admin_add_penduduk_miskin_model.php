<?php 

class Admin_add_penduduk_miskin_model extends CI_Model {


	function admin_add_penduduk_miskin_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"tahun",
		 					"p.nik",
		 					"nama",
							"alamat",
							"pekerjaan",
							"desa",
							"tahun"
		 	);
			
		$this->db->select ( '*' ); 
    	$this->db->from ( 'data_kemiskinan dk' );
    	$this->db->join ( 'penduduk p', 'dk.nik=p.nik' , 'left' );
    	$this->db->join ( 'tiger_kecamatan kecamatan', 'kecamatan.id = p.id_kecamatan' , 'left' );
    	$this->db->join ( 'tiger_desa desa', 'desa.id = p.id_desa' , 'left' );
    	$this->db->join ( 'pekerjaan pk', 'pk.id = p.pekerjaan' , 'left' );
		
		// $this->db->select('d.*, p.nama_kab as kabupaten')->from("data_penduduk_miskin d");
		// $this->db->join('tiger_kabupaten p','p.id=d.id_kab');
		
		 


		 if($desa!='null') {
		 	$this->db->like("p.id_desa",$desa);
		 }

		 if($tahun!='0') {
		 	$this->db->like("dk.tahun", $tahun);

		 }

		 if($kecamatan!=null) {
		 	$this->db->like("p.id_kecamatan", $kecamatan);

		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get('');
		// echo $this->db->last_query(); exit;
 		return $res;
	}

	public function delete($var, $val, $table) {
		
		$this->db->where($var, $val);
		$this->db->delete($table);		
		
	}
	
	public function add($table, $data) {
		
		$this->db->insert($table, $data);
		
	}

	


}

?>