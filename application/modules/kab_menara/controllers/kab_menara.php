<?php 


class kab_menara extends adminkab_controller {
	
	var $controller;
	public function kab_menara(){
		parent::__construct();
		$this->controller = get_class($this);
        $this->load->model('coremodel','cm');
		$this->load->model($this->controller.'_model','dm');
		$this->load->helper("tanggal");
	}
	
		function index(){
		



		$data_array=array();

        $data_array['curPage'] = 'menara';

        

		$data_array['arr_kecamatan'] = $this->cm->arr_dropdown3("tiger_kecamatan", "id", "kecamatan", "kecamatan", "id_kota", "52_7");

		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Surat Rekomendasi Izin Menara Seluler ");
		$this->set_title("Surat Rekomendasi Izin Menara Seluler");
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
        $no_register = $_REQUEST['columns'][2]['search']['value'];
        $kecamatan = $_REQUEST['columns'][3]['search']['value'];
        $status = $_REQUEST['columns'][4]['search']['value'];
        



      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
				"no_register" => $no_register,
                "nama_pemohon" => $nama_pemohon,
				"kecamatan" => $kecamatan,
                "status" => $status,
				 
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

        $action = "<div class='btn-group'>
                              <button type='button' class='btn btn-primary'>Action</button>
                              <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span>
                                <span class='sr-only'>Toggle Dropdown</span>
                              </button>
                              <ul class='dropdown-menu' role='menu'>
                              	<li><a href='$this->controller/status?id=$id'><i class='fa fa-eye'></i> Status</a></li>
                              </ul>
                            </div>";

        	 
        	$arr_data[] = array(
        		$row['no_register'],
        		$row['nama_pemohon'],
        		$row['tgl_verifikasi'],
                $row['nm_kecamatan'],
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


    function status(){


        
         $get = $this->input->get(); 
         $id = $get['id'];
         
         $this->db->where('id',$id);
         $menara = $this->db->get('menara');
         $data_array = $menara->row_array();

         $data_array['tgl_verifikasi'] = flipdate($data_array['tgl_verifikasi']);
         $data_array['tgl_register'] = flipdate($data_array['tgl_register']);
         $data_array['tgl_lahir'] = flipdate($data_array['tgl_lahir']);

         $data_array['action'] = 'update';
         $data_array['curPage'] = 'menara';


         $data_array['arr_status'] = array('1' => "- Pilih status -",
                                            '2' => "Disetujui",
                                            '3' => "Tidak Disetujui" );
         // show_array($data); exit;
         // show_array($data_array);
      //    exit();
        

        // $data_array=array(
        //      'id' => $data->id,
        //      'nama' => $data->nama,
        //      'no_siup' => $data->no_siup,
        //      'no_npwp' => $data->no_npwp,
        //      'no_tdp' => $data->no_tdp,
        //      'telp' => $data->telp,
        //      'alamat' => $data->alamat,
        //      'email' => $data->email,
        //      'hp' => $data->hp,

        //  );

        

        $content = $this->load->view($this->controller."_status_view",$data_array,true);

        $this->set_subtitle("Status Pembentukan Izin Menara Seluler");
        $this->set_title("Status Pembentukan Izin Menara Seluler");
        $this->set_content($content);
        $this->cetak();

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
        $this->form_validation->set_rules('fc_ktp','Syarat teknis keempat','required');
        $this->form_validation->set_rules('photo','Syarat teknis kelima','required');
        $this->form_validation->set_rules('fc_pajak','Syarat teknis kelima','required');
        $this->form_validation->set_rules('matrai','Syarat teknis kelima','required');
        $this->form_validation->set_rules('fc_akte','Tgl. Surat','required');

        $this->form_validation->set_rules('siup_asli','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('tgl_register','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('no_register','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nama_petugas_verifikasi','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('tgl_verifikasi','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nama_camat','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('nip_camat','Pekerjaan Pemohon','required');


          
         
        $this->form_validation->set_message('required', ' %s Harap Diisi');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        // show_array($post);
        // exit();

        if($this->form_validation->run() == TRUE ) { 
            if($post['status']==2){
                $data = array('status' => $post['status'],
                                'tgl_rekom' => date('Y-m-d'), );
            }else{

             $data = array('status' => $post['status'], );
        }

        

    
        $this->db->where('id', $post['id']);
        $res = $this->db->update('menara', $data); 
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


}
?>