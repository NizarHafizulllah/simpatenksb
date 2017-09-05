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
                      <input type="text" class="form-control" name="nik_pemohon" id="nik_pemohon" placeholder="NIK Pemohon" value="<?php echo isset($nik_pemohon)?$nik_pemohon:''; ?>">
                      <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:'' ?>">
                    </div>
                  </div>


                 <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Pemohon</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" placeholder="Nama Pemohon" value="<?php echo isset($nama_pemohon)?$nama_pemohon:''; ?>">
                    </div>
                  </div> 
                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tempat Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo isset($tempat_lahir)?$tempat_lahir:''; ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_lahir)?$tgl_lahir:''; ?>">
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Pekerjaan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo isset($pekerjaan)?$pekerjaan:''; ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Telp</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No. Telp" value="<?php echo isset($no_telp)?$no_telp:''; ?>">
                    </div>
                  </div> 

                   <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Negara</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="negara_pemohon" id="negara_pemohon" placeholder="Negara" value="<?php echo isset($negara_pemohon)?$negara_pemohon:''; ?>">
                    </div>
                  </div> 



                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Alamat</label>
                    <div class="col-md-9">
                      <textarea rows="3" class="form-control resize_vertical" name="alamat" id="alamat" placeholder="Alamat"><?php echo isset($alamat)?$alamat:''; ?></textarea>
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
                      <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" placeholder="Nama Usaha" value="<?php echo isset($nama_usaha)?$nama_usaha:''; ?>" >
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Jenis Usaha</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Jenis Usaha" value="<?php echo isset($jenis_usaha)?$jenis_usaha:''; ?>" >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Ukuruan Luas</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="ukuran_luas_usaha" id="ukuran_luas_usaha" placeholder="Ukuran Usaha" value="<?php echo isset($ukuran_luas_usaha)?$ukuran_luas_usaha:''; ?>" >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Lokasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="lokasi_usaha" id="lokasi_usaha" placeholder="Lokasi Usaha" value="<?php echo isset($lokasi_usaha)?$lokasi_usaha:''; ?>" >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Status Bangunan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="status_bangunan_tempat_usaha" id="status_bangunan_tempat_usaha" placeholder="Status Bangunan Tempat Usaha" value="<?php echo isset($status_bangunan_tempat_usaha)?$status_bangunan_tempat_usaha:''; ?>" >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">NPWPD</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="npwpd" id="npwpd" placeholder="NPWPD" value="<?php echo isset($npwpd)?$npwpd:''; ?>" >
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Klasifikasi Usaha</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="klasifikasi_usaha" id="klasifikasi_usaha" placeholder="Klasifikasi Usaha" value="<?php echo isset($klasifikasi_usaha)?$klasifikasi_usaha:''; ?>" >
                    </div>
                  </div>


              



            </div>
        </div>
    </div>
</div>

<?php if ($action=='simpan') { ?>
                    
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
                      <div class="col-md-6">
                        <input type="radio" name="jenis_permohonan" class="radio-blue" value="baru">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="jenis_permohonan" class="radio-blue" value="lama">
                      </div>
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
                    <label class="col-md-8" for="text">1.  Fotokopi KTP ( 1 (satu) lembar) </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="ktp" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="ktp" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Fotocopy Tanda Bukti Hak Atas Tanah     </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fc_hak_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fc_hak_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Surat Pengantar dari kelurahan/desa   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sp_desa" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sp_desa" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Surat Permohonan bermaterai 6000     </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sp_materai" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sp_materai" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Denah Lokasi </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="denah_lokasi" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="denah_lokasi" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">6. Pas Foto Berwarna 3 x 4 ( 3 (tiga) lembar)    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="foto" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="foto" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">7. Fotocopy PBB  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fc_pbb" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fc_pbb" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">8. Rekomendasi dari UPTD Puskesmas setempat  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="rekom_uptd" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="rekom_uptd" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>      

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">9. Gambar Bangunan</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="gambar_bangunan" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="gambar_bangunan" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">10.  Fotocopy izin Kerja/Praktek Tenaga Kesehatan </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="fc_izin_praktek" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_izin_praktek" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">11.  Instalasi air, listrik dan telepon</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="instalasi_air" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="instalasi_air" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">12.  Rekomendasi Lurah/Kepala Desa setempat</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="rekom_desa" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="rekom_desa" class="radio-blue" value="tidak ada">
                      </div>
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
                      <div class="col-md-6">
                      	<input type="radio" name="siup_asli" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="siup_asli" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                 

            </div>
        </div>
    </div>
</div>

<?php }else { ?>


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
                      <div class="col-md-6">
                        <input type="radio" name="jenis_permohonan" class="radio-blue" value="baru" <?php if ($jenis_permohonan=='baru') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="jenis_permohonan" class="radio-blue" value="lama" <?php if ($jenis_permohonan=='lama') { echo 'checked="true"'; } ?>>
                      </div>
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
                    <label class="col-md-8" for="text">1.  Fotokopi KTP ( 1 (satu) lembar) </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="ktp" class="radio-blue" value="ada" <?php if ($ktp=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="ktp" class="radio-blue" value="tidak ada" <?php if ($ktp=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Fotocopy Tanda Bukti Hak Atas Tanah     </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="fc_hak_tanah" class="radio-blue" value="ada" <?php if ($fc_hak_tanah=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_hak_tanah" class="radio-blue" value="tidak ada" <?php if ($fc_hak_tanah=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Surat Pengantar dari kelurahan/desa   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="sp_desa" class="radio-blue" value="ada" <?php if ($sp_desa=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sp_desa" class="radio-blue" value="tidak ada" <?php if ($sp_desa=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Surat Permohonan bermaterai 6000     </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="sp_materai" class="radio-blue" value="ada" <?php if ($sp_materai=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sp_materai" class="radio-blue" value="tidak ada" <?php if ($sp_materai=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Denah Lokasi </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="denah_lokasi" class="radio-blue" value="ada" <?php if ($denah_lokasi=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="denah_lokasi" class="radio-blue" value="tidak ada" <?php if ($denah_lokasi=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">6. Pas Foto Berwarna 3 x 4 ( 3 (tiga) lembar)    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="foto" class="radio-blue" value="ada" <?php if ($foto=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="foto" class="radio-blue" value="tidak ada" <?php if ($foto=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">7. Fotocopy PBB  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="fc_pbb" class="radio-blue" value="ada" <?php if ($fc_pbb=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_pbb" class="radio-blue" value="tidak ada" <?php if ($fc_pbb=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">8. Rekomendasi dari UPTD Puskesmas setempat  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="rekom_uptd" class="radio-blue" value="ada" <?php if ($rekom_uptd=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="rekom_uptd" class="radio-blue" value="tidak ada" <?php if ($rekom_uptd=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>      

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">9. Gambar Bangunan</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="gambar_bangunan" class="radio-blue" value="ada" <?php if ($gambar_bangunan=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="gambar_bangunan" class="radio-blue" value="tidak ada" <?php if ($gambar_bangunan=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">10.  Fotocopy izin Kerja/Praktek Tenaga Kesehatan </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="fc_izin_praktek" class="radio-blue" value="ada" <?php if ($fc_izin_praktek=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_izin_praktek" class="radio-blue" value="tidak ada" <?php if ($fc_izin_praktek=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">11.  Instalasi air, listrik dan telepon</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="instalasi_air" class="radio-blue" value="ada" <?php if ($instalasi_air=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="instalasi_air" class="radio-blue" value="tidak ada" <?php if ($instalasi_air=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">12.  Rekomendasi Lurah/Kepala Desa setempat</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="rekom_desa" class="radio-blue" value="ada" <?php if ($rekom_desa=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="rekom_desa" class="radio-blue" value="tidak ada" <?php if ($rekom_desa=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
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
                      <div class="col-md-6">
                        <input type="radio" name="siup_asli" class="radio-blue" value="ada" <?php if ($siup_asli=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="siup_asli" class="radio-blue" value="tidak ada" <?php if ($siup_asli=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>  

                 

            </div>
        </div>
    </div>
</div>
 

<?php } ?>

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
                      <input type="text" class="form-control tanggal" name="tgl_register" id="tgl_register" placeholder="Tanggal Register" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_register)?$tgl_register:''; ?>">
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Registrasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_register" id="no_register" placeholder="No. Registrasi" value="<?php echo isset($no_register)?$no_register:''; ?>" >
                    </div>
                  </div>

            	<div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Petugas Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_petugas_verifikasi" id="nama_petugas_verifikasi" placeholder="Nama Petugas Verifikasi" value="<?php echo isset($nama_petugas_verifikasi)?$nama_petugas_verifikasi:''; ?>">
                    </div>
                  </div>

                 <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_verifikasi" id="tgl_verifikasi" placeholder="Tanggal Verifikasi" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_verifikasi)?$tgl_verifikasi:''; ?>">
                    </div>
                  </div> 


                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_camat" id="nama_camat" placeholder="Nama Camat" value="<?php echo isset($nama_camat)?$nama_camat:''; ?>">
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">NIP Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nip_camat" id="nip_camat" placeholder="NIP Camat" value="<?php echo isset($nip_camat)?$nip_camat:''; ?>">
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
	<button id="<?php echo $action ?>" style="border-radius: 8;" type="submit" class="btn btn-lg btn-primary"  >Simpan</button>
</div>
<div class="col-md-2">
	<a href="<?php echo site_url($this->controller); ?>"><button style="border-radius: 8;" id="reset" type="button" class="btn btn-lg btn-danger">Kembali</button></a>
</div>



</form>


<?php 
$this->load->view($this->controller.'_form_view_js');
?>