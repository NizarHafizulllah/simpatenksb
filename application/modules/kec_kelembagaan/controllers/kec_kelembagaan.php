<?php 


class kec_kelembagaan extends admin_controller {
	
	var $controller;
	public function kec_kelembagaan(){
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller.'_model','dm');
		$this->load->helper("tanggal");
	}
	



	function index(){
		
		$data_array=array();

        $data_array['curPage'] = 'p3a';

	   

		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Rekomendasi Pembentukan Kelembagaan P3A");
		$this->set_title("Rekomendasi Pembentukan Kelembagaan P3A");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}

	 function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $nama_pemohon = $_REQUEST['columns'][1]['search']['value'];
        $no_regis = $_REQUEST['columns'][2]['search']['value'];
        
        $userdata = $this->session->userdata('admin_login');
        $id_kecamatan = $userdata['id_kecamatan']; 



      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
				"no_regis" => $no_regis,
                "nama_pemohon" => $nama_pemohon,
                "id_kecamatan" => $id_kecamatan
				
				 
		);   

		// show_array($req_param);
  //       exit();  
           
        $row = $this->dm->data($req_param)->result_array();


		
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       
        $arr_data = array();
        foreach($result as $row) : 
		$id = $row['id'];

        if ($row['status']==1) {
            $action = "<div class='btn-group'>
                              <button type='button' class='btn btn-primary'>Action</button>
                              <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span>
                                <span class='sr-only'>Toggle Dropdown</span>
                              </button>
                              <ul class='dropdown-menu' role='menu'>
                                <li><a href='$this->controller/status?id=$id'><i class='fa fa-eye'></i> Status</a></li>
                                <li><a href='$this->controller/editdata?id=$id'><i class='fa fa-edit'></i> Edit</a></li>
                                <li><a href='#' onclick=\"hapus('$id')\" ><i class='fa fa-trash'></i> Hapus</a></li>
                                <li><a href='#' onclick=\"printsurat('$id')\" ><i class='fa fa-print'></i> Formulir</a></li>
                              </ul>
                            </div>";
        }else if($row['status']==2){
            $action = "<div class='btn-group'>
                              <button type='button' class='btn btn-primary'>Action</button>
                              <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span>
                                <span class='sr-only'>Toggle Dropdown</span>
                              </button>
                              <ul class='dropdown-menu' role='menu'>
                                <li><a href='$this->controller/status?id=$id'><i class='fa fa-eye'></i> Status</a></li>
                                <li><a href='#' onclick=\"printsurat('$id')\" ><i class='fa fa-print'></i> Formulir</a></li>
                                <li><a href='#' onclick=\"izin('$id')\" ><i class='fa fa-print'></i> Rekomendasi</a></li>
                              </ul>
                            </div>";
        }else{
            $action = "<div class='btn-group'>
                              <button type='button' class='btn btn-primary'>Action</button>
                              <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span>
                                <span class='sr-only'>Toggle Dropdown</span>
                              </button>
                              <ul class='dropdown-menu' role='menu'>
                                <li><a href='$this->controller/status?id=$id'><i class='fa fa-eye'></i> Status</a></li>
                                <li><a href='$this->controller/editdata?id=$id'><i class='fa fa-edit'></i> Edit</a></li>
                                <li><a href='#' onclick=\"hapus('$id')\" ><i class='fa fa-trash'></i> Hapus</a></li>
                              </ul>
                            </div>";
        }

        
        	
        	 
        	$arr_data[] = array(
        		$row['no_register'],
        		$row['nama_pemohon'],
        		$row['tgl_verifikasi'],
        		$row['nama_petugas_verifikasi'],
        	   $action
        		
         			 
        		  				);
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
        				  'recordsTotal' => $count, 
        				  'recordsFiltered' => $count,
        				  'data'=>$arr_data
        	);
         
        echo json_encode($responce); 
    }


    function baru(){

    	$data_array=array();
    
        $data_array['action'] = 'simpan';
        $data_array['tgl_verifikasi'] = "";
        $data_array['tgl_surat'] = ""; 
        $data_array['curPage'] = 'p3a';

        $userdata = $this->session->userdata('admin_login');

        $this->db->where('id_kecamatan', $userdata['kecamatan']);
        $profil_kecamatan = $this->db->get('profil_kecamatan')->row_array();

        $data_array['nama_camat'] = $profil_kecamatan['nama_camat'];
        $data_array['nip_camat'] = $profil_kecamatan['nip_camat'];


        $content = $this->load->view($this->controller."_form_view",$data_array,true);
       $this->set_subtitle("Tambah Pembentukan Kelembagaan P3A");
		$this->set_title("Tambah Pembentukan Kelembagaan P3A");
		$this->set_content($content);
		$this->cetak();
    }



    function simpan(){


    $post = $this->input->post();


       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_ktp','NIK Pemohon','required');
        $this->form_validation->set_rules('nama_pemohon','Nama Pemohon','required');
        $this->form_validation->set_rules('tempat_lahir','Alamat','required');
        $this->form_validation->set_rules('tgl_lahir','Syarat umum pertama','required');
        $this->form_validation->set_rules('pekerjaan','Syarat umum kedua','required');
        $this->form_validation->set_rules('no_tlp','Syarat umum ketiga','required');
        $this->form_validation->set_rules('kewarganegaraan','Syarat umum keempat','required');
        $this->form_validation->set_rules('alamat','Syarat umum kelima','required');
        $this->form_validation->set_rules('merek_usaha','Syarat umum keenam','required');
        $this->form_validation->set_rules('jenis_usaha','Syarat umum ketujuh','required');
        $this->form_validation->set_rules('klasif_perusahaan','Syarat umum kedelapan','required');
        $this->form_validation->set_rules('alamat_usaha','Syarat umum kesembilan','required');
        $this->form_validation->set_rules('retribusi_perthn_f','Syarat teknis pertama','required');
        $this->form_validation->set_rules('npwpd','Syarat teknis kedua','required');
        $this->form_validation->set_rules('jenis_permohonan','Syarat teknis ketiga','required');
        $this->form_validation->set_rules('matrai','Syarat teknis keempat','required');
        $this->form_validation->set_rules('adrt','Syarat teknis kelima','required');
        $this->form_validation->set_rules('fc_notaris','Syarat teknis kelima','required');
        $this->form_validation->set_rules('rekom_lurah','Syarat teknis kelima','required');
        $this->form_validation->set_rules('rekom_dinas','Tgl. Surat','required');
        $this->form_validation->set_rules('program_kerja','Tgl. Lahir Pemohon','required');
        $this->form_validation->set_rules('daftar_pengurus','No. Telp. Pemohon','required');
        $this->form_validation->set_rules('siup_asli','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('tgl_register','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('no_register','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nama_petugas_verifikasi','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('tgl_verifikasi','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nama_camat','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nip_camat','Pekerjaan Pemohon','required');


          
         
        $this->form_validation->set_message('required', ' %s Harap Diisi');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        // show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $userdata = $this->session->userdata('admin_login');
        $post['kecamatan'] = $userdata['id_kecamatan'];
        $post['kabupaten'] = '52_7';
        $post['tgl_verifikasi'] = flipdate($post['tgl_verifikasi']);
        $post['tgl_lahir'] = flipdate($post['tgl_lahir']);
        $post['tgl_register'] = flipdate($post['tgl_register']);
        $post['status'] = 1;
        $post['id'] = md5(microtime(true));

        
        
        $res = $this->db->insert('p3a', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
}



function update(){


    $post = $this->input->post();

    // show_array($post);
    // exit();
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_ktp','NIK Pemohon','required');
        $this->form_validation->set_rules('nama_pemohon','Nama Pemohon','required');
        $this->form_validation->set_rules('tempat_lahir','Alamat','required');
        $this->form_validation->set_rules('tgl_lahir','Syarat umum pertama','required');
        $this->form_validation->set_rules('pekerjaan','Syarat umum kedua','required');
        $this->form_validation->set_rules('no_tlp','Syarat umum ketiga','required');
        $this->form_validation->set_rules('kewarganegaraan','Syarat umum keempat','required');
        $this->form_validation->set_rules('alamat','Syarat umum kelima','required');
        $this->form_validation->set_rules('merek_usaha','Syarat umum keenam','required');
        $this->form_validation->set_rules('jenis_usaha','Syarat umum ketujuh','required');
        $this->form_validation->set_rules('klasif_perusahaan','Syarat umum kedelapan','required');
        $this->form_validation->set_rules('alamat_usaha','Syarat umum kesembilan','required');
        $this->form_validation->set_rules('retribusi_perthn_f','Syarat teknis pertama','required');
        $this->form_validation->set_rules('npwpd','Syarat teknis kedua','required');
        $this->form_validation->set_rules('jenis_permohonan','Syarat teknis ketiga','required');
        $this->form_validation->set_rules('matrai','Syarat teknis keempat','required');
        $this->form_validation->set_rules('adrt','Syarat teknis kelima','required');
        $this->form_validation->set_rules('fc_notaris','Syarat teknis kelima','required');
        $this->form_validation->set_rules('rekom_lurah','Syarat teknis kelima','required');
        $this->form_validation->set_rules('rekom_dinas','Tgl. Surat','required');
        $this->form_validation->set_rules('program_kerja','Tgl. Lahir Pemohon','required');
        $this->form_validation->set_rules('daftar_pengurus','No. Telp. Pemohon','required');
        $this->form_validation->set_rules('siup_asli','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('tgl_register','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('no_register','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nama_petugas_verifikasi','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('tgl_verifikasi','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nama_camat','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nip_camat','Pekerjaan Pemohon','required');
          
         
        $this->form_validation->set_message('required', ' Harap isi semua data');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $userdata = $this->session->userdata('admin_login');
        $post['kecamatan'] = $userdata['id_kecamatan'];
        $post['kabupaten'] = '52_7';
        $post['tgl_verifikasi'] = flipdate($post['tgl_verifikasi']);
        $post['tgl_lahir'] = flipdate($post['tgl_lahir']);
        $post['tgl_register'] = flipdate($post['tgl_register']);
        $post['status'] = 1;
        $this->db->where('id', $post['id']);
        $res = $this->db->update('p3a', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DIUPDATE");
        }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
}






   function editdata(){


    	
         $get = $this->input->get(); 
         $id = $get['id'];
         
         $this->db->where('id',$id);
         $imb = $this->db->get('p3a');
         $data_array = $imb->row_array();

         $data_array['tgl_lahir'] = flipdate($data_array['tgl_lahir']);
         $data_array['tgl_verifikasi'] = flipdate($data_array['tgl_verifikasi']);
         $data_array['tgl_register'] = flipdate($data_array['tgl_register']);

         $data_array['action'] = 'update';
         $data_array['curPage'] = 'p3a';
         // show_array($data); exit;
    	 // show_array($data_array);
      //    exit();
		

    	// $data_array=array(
    	// 		'id' => $data->id,
    	// 		'nama' => $data->nama,
    	// 		'no_siup' => $data->no_siup,
    	// 		'no_npwp' => $data->no_npwp,
    	// 		'no_tdp' => $data->no_tdp,
    	// 		'telp' => $data->telp,
    	// 		'alamat' => $data->alamat,
    	// 		'email' => $data->email,
    	// 		'hp' => $data->hp,

    	// 	);

        

        $content = $this->load->view($this->controller."_form_view",$data_array,true);

		$this->set_subtitle("Edit Pembentukan Kelembagaan P3A");
		$this->set_title("Edit Pembentukan Kelembagaan P3A");
		$this->set_content($content);
		$this->cetak();

    }


        function hapusdata(){
    	$get = $this->input->post();
    	$id = $get['id'];

    	$data = array('id' => $id, );

    	$res = $this->db->delete('p3a', $data);
        if($res){
            $arr = array("error"=>false,"message"=>"DATA BERHASIL DIHAPUS");
        }
        else {
            $arr = array("error"=>true,"message"=>"DATA GAGAL DIHAPUS ".mysql_error());
        }
    	//redirect('sa_birojasa');
        echo json_encode($arr);
    }



   function status(){


    	
         $get = $this->input->get(); 
         $id = $get['id'];
         
         $this->db->where('id',$id);
         $imb = $this->db->get('p3a');
         $data_array = $imb->row_array();

         $data_array['tgl_lahir'] = flipdate($data_array['tgl_lahir']);
         $data_array['tgl_verifikasi'] = flipdate($data_array['tgl_verifikasi']);
         $data_array['tgl_register'] = flipdate($data_array['tgl_register']);

         $data_array['action'] = 'update';
         $data_array['curPage'] = 'p3a';
         // show_array($data); exit;
    	 // show_array($data_array);
      //    exit();
		

    	// $data_array=array(
    	// 		'id' => $data->id,
    	// 		'nama' => $data->nama,
    	// 		'no_siup' => $data->no_siup,
    	// 		'no_npwp' => $data->no_npwp,
    	// 		'no_tdp' => $data->no_tdp,
    	// 		'telp' => $data->telp,
    	// 		'alamat' => $data->alamat,
    	// 		'email' => $data->email,
    	// 		'hp' => $data->hp,

    	// 	);

        

        $content = $this->load->view($this->controller."_status_view",$data_array,true);

		$this->set_subtitle("Status Pembentukan Kelembagaan P3A");
		$this->set_title("Status Pembentukan Kelembagaan P3A");
		$this->set_content($content);
		$this->cetak();

    }



    function printsurat(){
   $get = $this->input->get(); 
    
    $id = $get['id'];

    
     
    




    $this->db->select('m.*, kec.kecamatan as nm_kecamatan, kab.kota as kabupaten');

      $this->db->from("imb m");
      $this->db->join('tiger_kecamatan kec','m.kecamatan=kec.id');
      $this->db->join('tiger_kota kab','m.kabupaten=kab.id');
      // $this->db->where('id_birojasa', $id_birojasa);

     
      $this->db->where("m.id",$id);

     $resx = $this->db->get();


    $data['controller'] = get_class($this);
    $data['header'] = "Dokumen Rekomendasi";
    $data['query'] = $resx->row_array();

    $timestamp = strtotime($data['query']['tgl_verifikasi']);

    $day = date('l', $timestamp);
    $data['hari'] = hari($day);
    // show_array($data);
    // exit();

    
    
    // show_array($data);exit;
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/cetak_data",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'FI');
}




    function printsuratizin(){
    $get = $this->input->get(); 
    
    $id = $get['id'];

     $userdata = $this->session->userdata('admin_login');
        

    
     $this->db->where('id_kecamatan', $userdata['kecamatan']);
     $pk = $this->db->get('profil_kecamatan');
    
    if ($pk->num_rows()>0) {
        $data['profil_kecamatan'] = $pk->row_array();
    }else{
        $data['profil_kecamatan'] = array('tahun_pembentukan', '.....',
                                           'no_perda_pembentukan', '.....', );
    }




    $this->db->select('m.*, kec.kecamatan as nm_kecamatan, kab.kota as kabupaten');

      $this->db->from("p3a m");
      $this->db->join('tiger_kecamatan kec','m.kecamatan=kec.id');
      $this->db->join('tiger_kota kab','m.kabupaten=kab.id');
      // $this->db->where('id_birojasa', $id_birojasa);

     
      $this->db->where("m.id",$id);

     $resx = $this->db->get();


    $data['controller'] = get_class($this);
    $data['header'] = "Dokumen Pembentukan Kelembagaan P3A";
    $data['query'] = $resx->row_array();

    $timestamp = strtotime($data['query']['tgl_verifikasi']);

    $day = date('l', $timestamp);
    $data['d_surat'] = date('d', $timestamp);
    $bulan = date('m', $timestamp);
    $data['y_surat'] = date('Y', $timestamp);

    $data['m_surat'] = bulan($bulan);

    $data['hari'] = hari($day);
    // show_array($data);
    // exit();

    
    
    // show_array($data);exit;
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/cetak_surat",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'FI');
}



    function formulir(){
    $get = $this->input->get(); 
    
    $id = $get['id'];

    
     
    




    $this->db->select('m.*, kec.kecamatan as nm_kecamatan, kab.kota as kabupaten');

      $this->db->from("p3a m");
      $this->db->join('tiger_kecamatan kec','m.kecamatan=kec.id');
      $this->db->join('tiger_kota kab','m.kabupaten=kab.id');
      // $this->db->where('id_birojasa', $id_birojasa);

     
      $this->db->where("m.id",$id);

     $resx = $this->db->get();


    $data['controller'] = get_class($this);
    $data['header'] = "Blanko Permohonan P3A";
    $data['query'] = $resx->row_array();

    $timestamp = strtotime($data['query']['tgl_verifikasi']);

    $day = date('l', $timestamp);
    $data['d_surat'] = date('d', $timestamp);
    $bulan = date('m', $timestamp);
    $data['y_surat'] = date('Y', $timestamp);

    $data['m_surat'] = bulan($bulan);

    $data['hari'] = hari($day);
    // show_array($data);
    // exit();

    
    
    // show_array($data);exit;
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/formulir",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'FI');
}


 


}
?>