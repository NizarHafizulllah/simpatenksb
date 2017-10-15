<?php 


class app_situ extends verifikator_controller {
    
    var $controller;
    public function __construct(){
        parent::__construct();
        $this->controller = get_class($this);
        $this->load->model($this->controller.'_model','dm');
        $this->load->helper("tanggal");
    }
    



    function index(){
        
        $data_array=array();

        $data_array['curPage'] = 'situ';

       

        $content = $this->load->view($this->controller."_view",$data_array,true);

        $this->set_subtitle("Izin Tempat Usaha");
        $this->set_title("Izin Tempat Usaha");
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
        
        $userdata = $this->session->userdata('app_login');
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

         if ($row['status']=='1') {
            $status = '<span class="label label-info"> Dalam Proses</span>';
        }else if ($row['status']=='2') {
            $status = '<span class="label label-success"> Disetujui</span>';
        }else if ($row['status']=='3') {
            $status = '<span class="label label-danger"> Tidak Disetujui</span>';
        }
             
          $arr_data[] = array(
                $row['no_register'],
                $row['nama_pemohon'],
                flipdate($row['tgl_verifikasi']),
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
        $data_array['curPage'] = 'situ';

        $userdata = $this->session->userdata('admin_login');

        $this->db->where('id_kecamatan', $userdata['kecamatan']);
        $profil_kecamatan = $this->db->get('profil_kecamatan')->row_array();

        $data_array['nama_camat'] = $profil_kecamatan['nama_camat'];
        $data_array['nip_camat'] = $profil_kecamatan['nip_camat'];


        $content = $this->load->view($this->controller."_form_view",$data_array,true);
       $this->set_subtitle("Tambah Izin Tempat Usaha ");
        $this->set_title("Tambah Izin Tempat Usaha ");
        $this->set_content($content);
        $this->cetak();
    }





function update(){


    $post = $this->input->post();

    // show_array($post);
    // exit();
       


        $this->load->library('form_validation');
      $this->form_validation->set_rules('nik_pemohon','Nomor registrasi','required');
        $this->form_validation->set_rules('nama_pemohon','Nama Pemohon','required');
        $this->form_validation->set_rules('tempat_lahir','Alamat','required');
        $this->form_validation->set_rules('tgl_lahir','Syarat umum pertama','required');
        $this->form_validation->set_rules('pekerjaan','Syarat umum kedua','required');
        $this->form_validation->set_rules('alamat','Syarat umum ketiga','required');
        $this->form_validation->set_rules('no_telp','Syarat umum keempat','required');
        $this->form_validation->set_rules('nama_usaha','Syarat umum keenam','required');
        $this->form_validation->set_rules('jenis_usaha','Syarat umum ketujuh','required');
        $this->form_validation->set_rules('ukuran_luas_usaha','Syarat umum kedelapan','required');
        $this->form_validation->set_rules('lokasi_usaha','Syarat umum kesembilan','required');
        $this->form_validation->set_rules('status_bangunan_tempat_usaha','Syarat teknis pertama','required');
        $this->form_validation->set_rules('npwpd','Syarat teknis kedua','required');
        $this->form_validation->set_rules('klasifikasi_usaha','Syarat teknis ketiga','required');
        $this->form_validation->set_rules('no_register','Syarat teknis kelima','required');
        $this->form_validation->set_rules('nama_camat','Syarat teknis kelima','required');
        $this->form_validation->set_rules('nip_camat','Tgl. Surat','required');
        $this->form_validation->set_rules('ktp','Tgl. Lahir Pemohon','required');
        $this->form_validation->set_rules('fc_hak_tanah','Tempat Lahir Pemohon','required');
        $this->form_validation->set_rules('sp_desa','No. Telp. Pemohon','required');
        $this->form_validation->set_rules('sp_materai','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('denah_lokasi','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('foto','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('fc_pbb','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('rekom_uptd','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('gambar_bangunan','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('fc_siu','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('instalasi_air','Pekerjaan Pemohon','required');
        $this->form_validation->set_rules('siup_asli','Pekerjaan Pemohon','required');
          
         
        $this->form_validation->set_message('required', ' Harap isi semua data');
        
        $this->form_validation->set_error_delimiters('', '<br>&nbsp;<br>&nbsp;<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $userdata = $this->session->userdata('app_login');
        
        if ($post['status']==2) {
            $data = array('status' => $post['status'],
                        'tgl_verifikasi' => date('Y-m-d'),
                        'nama_petugas_verifikasi' => $userdata['nama']);
    
        }else{
            $data = array('status' => $post['status'],);
    
        }
         
        $this->db->where('id', $post['id']);
        $res = $this->db->update('situ', $data); 
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






   


   function status(){


        
         $get = $this->input->get(); 
         $id = $get['id'];
         
         $this->db->where('id',$id);
         $situ = $this->db->get('situ');
         $data_array = $situ->row_array();

         $data_array['tgl_verifikasi'] = flipdate($data_array['tgl_verifikasi']);
         $data_array['tgl_register'] = flipdate($data_array['tgl_register']);
         $data_array['tgl_lahir'] = flipdate($data_array['tgl_lahir']);

         $data_array['action'] = 'update';
         $data_array['curPage'] = 'situ';


         $data_array['arr_status'] = array('1' => "- Pilih status -",
                                            '2' => "Disetujui",
                                            '3' => "Tidak Disetujui" );

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

        $this->set_subtitle("Status Izin Tempat Usaha ");
        $this->set_title("Status Izin Tempat Usaha    ");
        $this->set_content($content);
        $this->cetak();

    }



  
 


}
?>