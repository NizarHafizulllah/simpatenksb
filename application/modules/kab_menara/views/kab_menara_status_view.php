<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/datatables.css">
<link href="<?php echo base_url(); ?>assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>

<style>
        @media(max-width: 1024px)
        {
            .radio-inline + .radio-inline, .checkbox-inline + .checkbox-inline {
                margin-top: 0;
                margin-left: 8px;
            }
        }
    </style>


<div class="row">
  <div class="col-md-12">
                    <!-- First Basic Table strats here-->
        <div class="panel">
            <?php if ($status=='2') { ?>
                  <div class="panel-heading" style="background-color: #2980b9;">
                      <h3 class="panel-title">
                          <i class="ti-layout-cta-left"></i> Disetujui
                    </h3>
                  </div>
                <?php }else if ($status=='1'){ ?>
                  <div class="panel-heading" style="background-color: #f1c40f;">
                      <h3 class="panel-title">
                          <i class="ti-layout-cta-left"></i> Proses
                    </h3>
                  </div>
                <?php  }else if ($status=='3'){ ?>
                    <div class="panel-heading" style="background-color: #e74c3c;">
                      <h3 class="panel-title">
                          <i class="ti-layout-cta-left"></i> Tidak Disetujui
                    </h3>
                  </div>
                <?php } ?>

            
            <div class="panel-body">
              <div class="col-lg-12">
                <?php if ($status=='2') { ?>
                  <p>Anda menyetujui data ini</p>
                <?php }else if ($status=='1') { ?>
                  <p>Data ini belum diproses</p>
                <?php  }else if ($status=='3') { ?>
                  <p>Anda tidak menyetujui data ini</p>
                <?php } ?>
              </div>
                   

            </div>
        </div>
    </div>
</div>
    

<form method="post" class="form-horizontal p-10" id="form_<?php echo $action ?>" action="<?php echo site_url("$this->controller/$action"); ?>" role="form">
<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-layout-cta-left"></i> Data Pemohon
               </h3>
            </div>
            <div class="panel-body">

            
                <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">NIK Pemohon</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="NIK Pemohon" value="<?php echo isset($no_ktp)?$no_ktp:''; ?>" readonly>
                      <input type="hidden" name="id" value="<?php echo isset($id)?$id:''; ?>">
                    </div>
                  </div>


                 <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Pemohon</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" placeholder="Nama Pemohon" value="<?php echo isset($nama_pemohon)?$nama_pemohon:''; ?>" readonly>
                    </div>
                  </div> 
                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tempat Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo isset($tempat_lahir)?$tempat_lahir:''; ?>" readonly>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_lahir)?$tgl_lahir:''; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Pekerjaan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo isset($pekerjaan)?$pekerjaan:''; ?>" readonly>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Telp</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No. Telp" value="<?php echo isset($no_tlp)?$no_tlp:''; ?>" readonly>
                    </div>
                  </div> 

                   <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Negara</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name=" kewarganegaraan" id="kewarganegaraan" placeholder="Negara" value="<?php echo isset($kewarganegaraan)?$kewarganegaraan:''; ?>" readonly>
                    </div>
                  </div> 



                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Alamat</label>
                    <div class="col-md-9">
                      <textarea rows="3" class="form-control resize_vertical" name="alamat" id="alamat" placeholder="Alamat" readonly><?php echo isset($alamat)?$alamat:''; ?></textarea>
                    </div>
                  </div>          

            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-layout-cta-left"></i> Data Perusahaan
               </h3>
            </div>
            <div class="panel-body">

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Usaha</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="merek_usaha" id="merek_usaha" placeholder="Nama Usaha" value="<?php echo isset($merek_usaha)?$merek_usaha:''; ?>" readonly >
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Jenis Usaha</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Jenis Usaha" value="<?php echo isset($jenis_usaha)?$jenis_usaha:''; ?>" readonly >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Klasifikasi Perusahaan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="klasif_perusahaan" id="klasif_perusahaan" placeholder="Ukuran Usaha" value="<?php echo isset($klasif_perusahaan)?$klasif_perusahaan:''; ?>" readonly >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Lokasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="alamat_usaha" id="alamat_usaha" placeholder="Lokasi Usaha" value="<?php echo isset($alamat_usaha)?$alamat_usaha:''; ?>" readonly >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Retribusi Pertahun Fiskal</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="retribusi_perthn_f" id="retribusi_perthn_f" placeholder="Status Bangunan Tempat Usaha" value="<?php echo isset($retribusi_perthn_f)?$retribusi_perthn_f:''; ?>" readonly >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">NPWPD</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="npwpd" id="npwpd" placeholder="NPWPD" value="<?php echo isset($npwpd)?$npwpd:''; ?>" readonly >
                    </div>
                  </div>

                 
            </div>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-layout-cta-left"></i> Jenis Pendaftaran
               </h3>
            </div>
            <div class="panel-body">

              <div class="form-group p-10">
                    <label class="control-label col-md-8" for="text">&nbsp;</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <b>Baru</b>
                      </div>
                      <div class="col-md-6">
                        <b>Ulang</b>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">1. Jenis Pendaftaran </label>
                    <div class="col-md-4">
                      <?php if ($jenis_permohonan=='baru') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="jenis_permohonan" class="radio-blue" value="baru" checked="true">
                      </div>
                      <div class="col-md-6">
                        &nbsp;
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="jenis_permohonan" class="radio-blue" value="lama" checked="true">
                      </div>

                      <?php } ?>
                    </div>
                  </div>  
 

            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-layout-cta-left"></i> Syarat Umum
               </h3>
            </div>
           <div class="panel-body">

             <div class="form-group p-10">
                    <label class="control-label col-md-8" for="text">&nbsp;</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <b>Ada</b>
                      </div>
                      <div class="col-md-6">
                        <b>Tidak Ada</b>
                      </div>
                    </div>
            </div> 

            <div class="form-group p-10">
                    <label class="col-md-8" for="text">1. Fotokopi KTP ( 1 (satu) lembar) </label>
                    <div class="col-md-4">
                      <?php if ($fc_ktp=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="fc_ktp" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        &nbsp;
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_ktp" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>
                    </div>
                  </div> 

             

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Pasphoto warna ukuran 3x4  (3 (tiga) lembar) </label>
                    <div class="col-md-4">
                      <?php if ($photo=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="photo" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        &nbsp;
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="photo" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Fotokopi bukti Setoran Pajak Tahun Terakhir (1 (satu) lembar) </label>
                    <div class="col-md-4">
                      <?php if ($fc_pajak=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="fc_pajak" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        &nbsp;
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_pajak" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Materai Rp6.000,- (3 (tiga) lembar) </label>
                    <div class="col-md-4">
                      <?php if ($matrai=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="matrai" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        &nbsp;
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="matrai" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>
                    </div>
                  </div> 

                  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Fotokopi Akte Pendirian Perusahaan (khusus untuk CV dan PT) </label>
                    <div class="col-md-4">
                      <?php if ($fc_akte=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="fc_akte" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        &nbsp;
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_akte" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>
                    </div>
                  </div> 

            </div>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-layout-cta-left"></i> Syarat Tambahan Pendaftaran Ulang 
               </h3>
            </div>
            <div class="panel-body">

              <div class="form-group p-10">
                    <label class="control-label col-md-8" for="text">&nbsp;</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <b>Ada</b>
                      </div>
                      <div class="col-md-6">
                        <b>Tidak Ada</b>
                      </div>
                    </div>
                  </div> 

                  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">1.  SIUP Asli    </label>
                    <div class="col-md-4">
                    <?php if ($siup_asli=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="siup_asli" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        &nbsp;
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="siup_asli" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>
                  </div>  

                 

            </div>
        </div>
    </div>
</div

<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-layout-cta-left"></i> Verifikasi dan Data Kecamatan
               </h3>
            </div>
            <div class="panel-body">

             <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Register</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_register" id="tgl_register" placeholder="Tanggal Register" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_register)?$tgl_register:''; ?>" readonly>
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Registrasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_register" id="no_register" placeholder="No. Registrasi" value="<?php echo isset($no_register)?$no_register:''; ?>" <?php if ($action=='update') { echo 'readonly'; } ?>>
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Petugas Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_petugas_verifikasi" id="nama_petugas_verifikasi" placeholder="Nama Petugas Verifikasi" value="<?php echo isset($nama_petugas_verifikasi)?$nama_petugas_verifikasi:''; ?>" readonly>
                    </div>
                  </div>

                 <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_verifikasi" id="tgl_verifikasi" placeholder="Tanggal Verifikasi" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_verifikasi)?$tgl_verifikasi:''; ?>" readonly>
                    </div>
                  </div> 


                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_camat" id="nama_camat" placeholder="Nama Camat" value="<?php echo isset($nama_camat)?$nama_camat:''; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">NIP Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nip_camat" id="nip_camat" placeholder="NIP Camat" value="<?php echo isset($nip_camat)?$nip_camat:''; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Status</label>
                    <div class="col-md-9">
                      <?php echo form_dropdown("status",$arr_status,isset($status)?$status:'','id="status" class="form-control input-style"'); ?>
                    </div>
                  </div> 
                            

            </div>
        </div>
    </div>
</div>



<div class="col-md-8">
  &nbsp;
</div>
<div class="col-md-2">
  <button id="<?php echo $action ?>" style="border-radius: 8;" type="submit" class="btn btn-lg btn-primary"  >Update</button>
</div>
<div class="col-md-2">
  <a href="<?php echo site_url($this->controller) ?>"> <button style="border-radius: 8;" id="reset" type="button" class="btn btn-lg btn-danger">Cancel</button></a>
</div>



</form>












<?php 
$this->load->view($this->controller.'_status_view_js');
?>