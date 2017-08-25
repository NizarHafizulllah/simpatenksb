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
                    <i class="ti-layout-cta-left"></i> Data Surat & Pemohon
               </h3>
            </div>
            <div class="panel-body">

            <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Surat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_surat" id="tgl_surat" placeholder="Tanggal Surat" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_surat)?$tgl_surat:''; ?>">
                    </div>
                  </div>

            	<div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Registrasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_regis" id="no_regis" placeholder="No. Registrasi" value="<?php echo isset($no_regis)?$no_regis:''; ?>" <?php if ($action=='update') { echo 'readonly'; } ?>>
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
                      <input type="text" class="form-control" name="tempat_lahir_pemohon" id="tempat_lahir_pemohon" placeholder="Tempat Lahir" value="<?php echo isset($tempat_lahir_pemohon)?$tempat_lahir_pemohon:''; ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_lahir_pemohon" id="tgl_lahir_pemohon" placeholder="Tanggal Lahir" data-date-format="dd-mm-yyyy" value="<?php echo isset($tgl_lahir_pemohon)?$tgl_lahir_pemohon:''; ?>">
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Pekerjaan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="pekerjaan_pemohon" id="pekerjaan_pemohon" placeholder="Pekerjaan" value="<?php echo isset($pekerjaan_pemohon)?$pekerjaan_pemohon:''; ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Telp</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_telp_pemohon" id="no_telp_pemohon" placeholder="No. Telp" value="<?php echo isset($no_telp_pemohon)?$no_telp_pemohon:''; ?>">
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

<?php if ($action=='simpan') { ?>
                    


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
                    <label class="col-md-8" for="text">1. Formulir PIMB (1 asli, 2 fotokopi) </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="pimb" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="pimb" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Fotokopi KTP Pemilik ( 3 rangkap)     </label>
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
                    <label class="col-md-8" for="text">3. Pasphoto warna ukuran 3x4  (3 (tiga) lembar)   </label>
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
                    <label class="col-md-8" for="text">4. Fotokopi Sertifikat Tanah / SKGR Camat (3 (tiga) rangkap)    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fc_sertifikat_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fc_sertifikat_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Fotokopi PBB (3 (tiga) rangkap) </label>
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
                    <label class="col-md-8" for="text">6. BAP / Rekomendasi UPTD TARCIP setempat  (3 (tiga) rangkap)    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="bap" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="bap" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">7. Penelitian tanah/sondir untuk ruko 3 (tiga) lantai  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sondir_ruko" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sondir_ruko" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">8. Surat Persetujuan Sempada Tanah  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sempada" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sempada" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>      

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">9. Rekomendasi Dinas Perhubungan dan Infokom Kab.Sumbawa Barat (untuk IMB Tower)</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="rekom_imb_tower" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="rekom_imb_tower" class="radio-blue" value="tidak ada">
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
                    <i class="ti-layout-cta-left"></i> Persyaratan Teknis
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
                    <label class="col-md-8" for="text">1. Gambar rencana bangunan & site plan (3 (tiga) rangkap)   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="site_plan" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="site_plan" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Instalasi air, listrik dan telepon   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="instalasi" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="instalasi" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Penelitian tanah/sondir untuk ruko 3(tiga) lantai </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sondir_ruko_syarat" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sondir_ruko_syarat" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Sistem pengamanan </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="pengaman" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="pengaman" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Sistem drainase dan persampahan  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="drainase" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="drainase" class="radio-blue" value="tidak ada">
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
                    <label class="col-md-8" for="text">1. Formulir PIMB (1 asli, 2 fotokopi) </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="pimb" class="radio-blue" value="ada" <?php if ($pimb=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="pimb" class="radio-blue" value="tidak ada" <?php if ($pimb=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Fotokopi KTP Pemilik ( 3 rangkap)     </label>
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
                    <label class="col-md-8" for="text">3. Pasphoto warna ukuran 3x4  (3 (tiga) lembar)   </label>
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
                    <label class="col-md-8" for="text">4. Fotokopi Sertifikat Tanah / SKGR Camat (3 (tiga) rangkap)    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="fc_sertifikat_tanah" class="radio-blue" value="ada" <?php if ($fc_sertifikat_tanah=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_sertifikat_tanah" class="radio-blue" value="tidak ada" <?php if ($fc_sertifikat_tanah=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Fotokopi PBB (3 (tiga) rangkap) </label>
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
                    <label class="col-md-8" for="text">6. BAP / Rekomendasi UPTD TARCIP setempat  (3 (tiga) rangkap)    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="bap" class="radio-blue" value="ada" <?php if ($bap=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="bap" class="radio-blue" value="tidak ada" <?php if ($bap=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">7. Penelitian tanah/sondir untuk ruko 3 (tiga) lantai  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="sondir_ruko" class="radio-blue" value="ada" <?php if ($sondir_ruko=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sondir_ruko" class="radio-blue" value="tidak ada" <?php if ($sondir_ruko=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">8. Surat Persetujuan Sempada Tanah  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="sempada" class="radio-blue" value="ada" <?php if ($sempada=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sempada" class="radio-blue" value="tidak ada" <?php if ($sempada=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>      

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">9. Rekomendasi Dinas Perhubungan dan Infokom Kab.Sumbawa Barat (untuk IMB Tower)</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="rekom_imb_tower" class="radio-blue" value="ada" <?php if ($rekom_imb_tower=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="rekom_imb_tower" class="radio-blue" value="tidak ada" <?php if ($rekom_imb_tower=='tidak ada') { echo 'checked="true"'; } ?>>
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
                    <i class="ti-layout-cta-left"></i> Persyaratan Teknis
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
                    <label class="col-md-8" for="text">1. Gambar rencana bangunan & site plan (3 (tiga) rangkap)   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="site_plan" class="radio-blue" value="ada" <?php if ($site_plan=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="site_plan" class="radio-blue" value="tidak ada" <?php if ($site_plan=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Instalasi air, listrik dan telepon   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="instalasi" class="radio-blue" value="ada" <?php if ($instalasi=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="instalasi" class="radio-blue" value="tidak ada" <?php if ($instalasi=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Penelitian tanah/sondir untuk ruko 3(tiga) lantai </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="sondir_ruko_syarat" class="radio-blue" value="ada" <?php if ($sondir_ruko_syarat=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sondir_ruko_syarat" class="radio-blue" value="tidak ada" <?php if ($sondir_ruko_syarat=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Sistem pengamanan </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="pengaman" class="radio-blue" value="ada" <?php if ($pengaman=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="pengaman" class="radio-blue" value="tidak ada" <?php if ($pengaman=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Sistem drainase dan persampahan  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="drainase" class="radio-blue" value="ada" <?php if ($drainase=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="drainase" class="radio-blue" value="tidak ada" <?php if ($drainase=='tidak ada') { echo 'checked="true"'; } ?>>
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
	<a href="<?php echo site_url('kec_imb_dua'); ?>"><button style="border-radius: 8;" id="reset" type="button" class="btn btn-lg btn-danger">Kembali</button></a>
</div>



</form>


<?php 
$this->load->view($this->controller.'_form_view_js');
?>