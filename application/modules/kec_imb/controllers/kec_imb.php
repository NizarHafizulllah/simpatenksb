<?php 


class kec_imb extends admin_controller {
	
	var $controller;
	public function kec_imb(){
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller.'_model','dm');
		$this->load->helper("tanggal");
	}
	



	function index(){
		
		$data_array=array();

        

        $data_array['curPage'] = 'imb_satu';

	   

		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Perijinan IMB Dibawah 250");
		$this->set_title("Perijinan IMB Dibawah 250");
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
                                <li><a href='kec_imb/status?id=$id'><i class='fa fa-eye'></i> Status</a></li>
                                <li><a href='kec_imb/editdata?id=$id'><i class='fa fa-edit'></i> Edit</a></li>
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
                                <li><a href='kec_imb/status?id=$id'><i class='fa fa-eye'></i> Status</a></li>
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
                                <li><a href='kec_imb/status?id=$id'><i class='fa fa-eye'></i> Status</a></li>
                                <li><a href='kec_imb/editdata?id=$id'><i class='fa fa-edit'></i> Edit</a></li>
                                <li><a href='#' onclick=\"hapus('$id')\" ><i class='fa fa-trash'></i> Hapus</a></li>
                              </ul>
                            </div>";
        }

        
        	if ($row['status']=='1') {
            $status = '<span class="label label-info"> Dalam Proses</span>';
        }else if ($row['status']=='2') {
            $status = '<span class="label label-success"> Disetujui</span>';
        }else if ($row['status']=='3') {
            $status = '<span class="label label-danger"> Tidak Disetujui</span>';
        }
        	 
        	$arr_data[] = array(
        		$row['no_regis'],
        		$row['nama_pemohon'],
        		$row['tgl_verifikasi'],
        		$row['nama_petugas_verifikasi'],
                $status,
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
        $data_array['curPage'] = 'imb_satu';

        $userdata = $this->session->userdata('admin_login');

        $this->db->where('id_kecamatan', $userdata['kecamatan']);
        $profil_kecamatan = $this->db->get('profil_kecamatan')->row_array();

        $data_array['nama_camat'] = $profil_kecamatan['nama_camat'];
        $data_array['nip_camat'] = $profil_kecamatan['nip_camat'];

        $content = $this->load->view($this->controller."_form_view",$data_array,true);
       $this->set_subtitle("Tambah Perijinan IMB Dibawah 250");
		$this->set_title("Tambah Perijinan IMB Dibawah 250");
		$this->set_content($content);
		$this->cetak();
    }



    function simpan(){


    $post = $this->input->post();

    // show_array($post);
    // exit();
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_regis','Nomor registrasi','required');
        $this->form_validation->set_rules('nama_pemohon','Nama Pemohon','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('pimb','Syarat umum pertama','required');
        $this->form_validation->set_rules('ktp','Syarat umum kedua','required');
        $this->form_validation->set_rules('foto','Syarat umum ketiga','required');
        $this->form_validation->set_rules('sertifikat_tanah','Syarat umum keempat','required');
        $this->form_validation->set_rules('pbb','Syarat umum kelima','required');
        $this->form_validation->set_rules('bap','Syarat umum keenam','required');
        $this->form_validation->set_rules('penelitian_tanah','Syarat umum ketujuh','required');
        $this->form_validation->set_rules('setuju_sempada_tanah','Syarat umum kedelapan','required');
        $this->form_validation->set_rules('rekom_dishub','Syarat umum kesembilan','required');
        $this->form_validation->set_rules('tek_gamabar_rencana','Syarat teknis pertama','required');
        $this->form_validation->set_rules('tek_instalasi_air','Syarat teknis kedua','required');
        $this->form_validation->set_rules('tek_penelitian_tanah','Syarat teknis ketiga','required');
        $this->form_validation->set_rules('tek_pengaman','Syarat teknis keempat','required');
        $this->form_validation->set_rules('sistem_drainase','Syarat teknis kelima','required');
        $this->form_validation->set_rules('tgl_lahir_pemohon','Tgl. Lahir Pemohon','required');
        $this->form_validation->set_rules('tempat_lahir_pemohon','Tempat Lahir Pemohon','required');
        $this->form_validation->set_rules('no_telp_pemohon','No. Telp. Pemohon','required');
        $this->form_validation->set_rules('pekerjaan_pemohon','Pekerjaan Pemohon','required');
          
         
        $this->form_validation->set_message('required', ' Harap isi semua data');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        // show_array($data);

if($this->form_validation->run() == TRUE ) { 


            $config['upload_path'] = './upload_file/imb';
                $path = $config['upload_path'];
                $config['allowed_types'] = 'pdf';
                $config['encrypt_name'] = 'TRUE';


             $this->load->library('upload', $config);

        $filename_arr = array();
        foreach ($_FILES as $key => $value) {
            if (!empty($value['tmp_name']) && $value['size'] > 0) {
            if (!$this->upload->do_upload($key)) {
               // some errors
            } else {
                // Code After Files Upload Success GOES HERE
                $data_name = $this->upload->data();
                $filename_arr[] = $data_name['file_name'];
            }
        }
    }

    $post['file'] = $filename_arr[0];

        $userdata = $this->session->userdata('admin_login');
        $post['kecamatan'] = $userdata['id_kecamatan'];
        $post['kabupaten'] = '52_7';
        $post['tgl_surat'] = date('Y-m-d');
        $post['tgl_skgr'] = flipdate($post['tgl_skgr']);
        $post['tgl_rekom_desa'] = flipdate($post['tgl_rekom_desa']);
        $post['tgl_rekom_uptd'] = flipdate($post['tgl_rekom_uptd']);
        $post['tgl_lahir_pemohon'] = flipdate($post['tgl_lahir_pemohon']);
        $post['status'] = 1;
        $post['id'] = md5(microtime(true));
        

        // show_array($post);
        // exit();
        
        $res = $this->db->insert('imb', $post); 
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
        $this->form_validation->set_rules('no_regis','Nomor registrasi','required');
        $this->form_validation->set_rules('nama_pemohon','Nama Pemohon','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('pimb','Syarat umum pertama','required');
        $this->form_validation->set_rules('ktp','Syarat umum kedua','required');
        $this->form_validation->set_rules('foto','Syarat umum ketiga','required');
        $this->form_validation->set_rules('sertifikat_tanah','Syarat umum keempat','required');
        $this->form_validation->set_rules('pbb','Syarat umum kelima','required');
        $this->form_validation->set_rules('bap','Syarat umum keenam','required');
        $this->form_validation->set_rules('penelitian_tanah','Syarat umum ketujuh','required');
        $this->form_validation->set_rules('setuju_sempada_tanah','Syarat umum kedelapan','required');
        $this->form_validation->set_rules('rekom_dishub','Syarat umum kesembilan','required');
        $this->form_validation->set_rules('tek_gamabar_rencana','Syarat teknis pertama','required');
        $this->form_validation->set_rules('tek_instalasi_air','Syarat teknis kedua','required');
        $this->form_validation->set_rules('tek_penelitian_tanah','Syarat teknis ketiga','required');
        $this->form_validation->set_rules('tek_pengaman','Syarat teknis keempat','required');
        $this->form_validation->set_rules('sistem_drainase','Syarat teknis kelima','required');
        $this->form_validation->set_rules('tgl_lahir_pemohon','Tgl. Lahir Pemohon','required');
        $this->form_validation->set_rules('tempat_lahir_pemohon','Tempat Lahir Pemohon','required');
        $this->form_validation->set_rules('no_telp_pemohon','No. Telp. Pemohon','required');
        $this->form_validation->set_rules('pekerjaan_pemohon','Pekerjaan Pemohon','required');
          
         
        $this->form_validation->set_message('required', ' Harap isi semua data');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 


    $config['upload_path'] = './upload_file/imb';
                $path = $config['upload_path'];
                $config['allowed_types'] = 'pdf';
                $config['encrypt_name'] = 'TRUE';


             $this->load->library('upload', $config);

        $filename_arr = array();
        foreach ($_FILES as $key => $value) {
            if (!empty($value['tmp_name']) && $value['size'] > 0) {
            if (!$this->upload->do_upload($key)) {
               // some errors
            } else {
                // Code After Files Upload Success GOES HERE
                $data_name = $this->upload->data();
                $filename_arr[] = $data_name['file_name'];
            }
            $post['file'] = $filename_arr[0];
        }else{
            unset($post['file']);
        }
    }

        $userdata = $this->session->userdata('admin_login');
        $post['kecamatan'] = $userdata['id_kecamatan'];
        $post['kabupaten'] = '52_7';
        $post['tgl_lahir_pemohon'] = flipdate($post['tgl_lahir_pemohon']);
        $post['tgl_skgr'] = flipdate($post['tgl_skgr']);
        $post['tgl_rekom_desa'] = flipdate($post['tgl_rekom_desa']);
        $post['tgl_rekom_uptd'] = flipdate($post['tgl_rekom_uptd']);

        $post['status'] = 1;
        
        $this->db->where('id', $post['id']);
        $res = $this->db->update('imb', $post); 
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
         $imb = $this->db->get('imb');
         $data_array = $imb->row_array();

         $data_array['tgl_lahir_pemohon'] = flipdate($data_array['tgl_lahir_pemohon']);
         $data_array['tgl_skgr'] = flipdate($data_array['tgl_skgr']);
         $data_array['tgl_rekom_desa'] = flipdate($data_array['tgl_rekom_desa']);
         $data_array['tgl_rekom_uptd'] = flipdate($data_array['tgl_rekom_uptd']);


         $data_array['action'] = 'update';
         $data_array['curPage'] = 'imb_satu';
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

        

        $content = $this->load->view($this->controller."_form_view_edit",$data_array,true);

		$this->set_subtitle("Edit Perijinan IMB Dibawah 250");
		$this->set_title("Edit Perijinan IMB Dibawah 250");
		$this->set_content($content);
		$this->cetak();

    }


        function hapusdata(){
    	$get = $this->input->post();
    	$id = $get['id'];

    	$data = array('id' => $id, );

    	$res = $this->db->delete('imb', $data);
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
         $imb = $this->db->get('imb');
         $data_array = $imb->row_array();

         $data_array['tgl_verifikasi'] = flipdate($data_array['tgl_verifikasi']);
         $data_array['tgl_surat'] = flipdate($data_array['tgl_surat']);
         $data_array['tgl_lahir_pemohon'] = flipdate($data_array['tgl_lahir_pemohon']);

         $data_array['action'] = 'update';
         $data_array['curPage'] = 'imb_satu';
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

		$this->set_subtitle("Status IMB Dibawah 250");
		$this->set_title("Status IMB Dibawah 250");
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
    $data['header'] = "Dokumen Persyaratan IMB";
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

      $this->db->from("imb m");
      $this->db->join('tiger_kecamatan kec','m.kecamatan=kec.id');
      $this->db->join('tiger_kota kab','m.kabupaten=kab.id');
      // $this->db->where('id_birojasa', $id_birojasa);

     
      $this->db->where("m.id",$id);

     $resx = $this->db->get();


    $data['controller'] = get_class($this);
    $data['header'] = "Dokumen Persyaratan IMB";
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
     $timestamp = strtotime($data['query']['tgl_surat']);

    $day = date('l', $timestamp);
    $data['dr_surat'] = date('d', $timestamp);
    $bulan = date('m', $timestamp);
    $data['yr_surat'] = date('Y', $timestamp);

    $data['mr_surat'] = bulan($bulan);

    $data['hari_r'] = hari($day);


    
    
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

      $this->db->from("imb m");
      $this->db->join('tiger_kecamatan kec','m.kecamatan=kec.id');
      $this->db->join('tiger_kota kab','m.kabupaten=kab.id');
      // $this->db->where('id_birojasa', $id_birojasa);

     
      $this->db->where("m.id",$id);

     $resx = $this->db->get();


    $data['controller'] = get_class($this);
    $data['header'] = "Dokumen Persyaratan IMB";
    $data['query'] = $resx->row_array();

    $timestamp = strtotime($data['query']['tgl_surat']);

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