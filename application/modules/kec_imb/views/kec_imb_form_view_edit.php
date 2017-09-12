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
                    <label class="control-label col-md-3" for="text">Nama Pemohon</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" placeholder="Nama Pemohon" value="<?php echo $nama_pemohon ?>">
                      <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tempat Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="tempat_lahir_pemohon" id="tempat_lahir_pemohon" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir_pemohon ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_lahir_pemohon" id="tgl_lahir_pemohon" placeholder="Tanggal Lahir" data-date-format="dd-mm-yyyy" value="<?php echo $tgl_lahir_pemohon ?>">
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Pekerjaan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="pekerjaan_pemohon" id="pekerjaan_pemohon" placeholder="Pekerjaan" value="<?php echo $pekerjaan_pemohon ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Telp</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_telp_pemohon" id="no_telp_pemohon" placeholder="No. Telp" value="<?php echo $no_telp_pemohon ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Alamat</label>
                    <div class="col-md-9">
                      <textarea rows="3" class="form-control resize_vertical" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat ?></textarea>
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
                    <i class="ti-layout-cta-left"></i> Data Surat 
               </h3>
            </div>
            <div class="panel-body">

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Surat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_surat" id="tgl_surat" placeholder="Tanggal Surat" data-date-format="dd-mm-yyyy" value="<?php echo $tgl_surat ?>">
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Registrasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_regis" id="no_regis" placeholder="No. Registrasi" value="<?php echo $no_regis ?>" readonly>
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Rekomendasi Desa</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_rekom_desa" id="no_rekom_desa" placeholder="No. Rekomendasi Desa" value="<?php echo $no_rekom_desa ?>">
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tgl. Rekomendasi Desa</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_rekom_desa" id="tgl_rekom_desa" placeholder="Tgl. Rekomendasi Desa" data-date-format="dd-mm-yyyy" value="<?php echo $tgl_rekom_desa ?>">
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. SKGR</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_skgr" id="no_skgr" placeholder="No. SKGR" value="<?php echo $no_skgr ?>">
                    </div>
                  </div>

                <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tgl. SKGR</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_skgr" id="tgl_skgr" placeholder="Tgl. SKGR" data-date-format="dd-mm-yyyy" value="<?php echo $tgl_skgr ?>">
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">No. Rekomendasi UPTD</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_rekom_uptd" id="no_rekom_uptd" placeholder="No. Rekomendasi UPTD" value="<?php echo $no_rekom_uptd ?>">
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tgl. Rekomendasi UPTD</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" name="tgl_rekom_uptd" id="tgl_rekom_uptd" placeholder="Tgl. Rekomendasi UPTD" data-date-format="dd-mm-yyyy" value="<?php echo $tgl_rekom_uptd ?>">
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
                    <label class="col-md-8" for="text">1. Formulir PIMB (1 asli, 2 fotokopi) </label>
                    <div class="col-md-4">

                    <?php if ($pimb=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="pimb" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="pimb" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="pimb" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="pimb" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Fotokopi KTP Pemilik ( 3 rangkap)  </label>
                    <div class="col-md-4">

                      <?php if ($ktp=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="ktp" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="ktp" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="ktp" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="ktp" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                      
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Pasphoto warna ukuran 3x4  (3 (tiga) lembar)   </label>
                    <div class="col-md-4">

                      <?php if ($foto=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="foto" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="foto" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="foto" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="foto" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Fotokopi Sertifikat Tanah / SKGR Camat (3 (tiga) rangkap)   </label>
                    <div class="col-md-4">
                      

                      <?php if ($sertifikat_tanah=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="sertifikat_tanah" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sertifikat_tanah" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="sertifikat_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sertifikat_tanah" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Fotokopi PBB (3 (tiga) rangkap)  </label>
                    <div class="col-md-4">

                       <?php if ($pbb=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="pbb" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="pbb" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="pbb" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="pbb" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                    
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">6. BAP / Rekomendasi UPTD TARCIP setempat  (3 (tiga) rangkap)   </label>
                    <div class="col-md-4">

                      <?php if ($bap=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="bap" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="bap" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="bap" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="bap" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                      
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">7. Penelitian tanah/sondir untuk ruko 3 (tiga) lantai  </label>
                    <div class="col-md-4">

                      <?php if ($penelitian_tanah=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="penelitian_tanah" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="penelitian_tanah" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="penelitian_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="penelitian_tanah" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">8. Surat Persetujuan Sempada Tanah  </label>
                    <div class="col-md-4">

                    <?php if ($setuju_sempada_tanah=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="setuju_sempada_tanah" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="setuju_sempada_tanah" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="setuju_sempada_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="setuju_sempada_tanah" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                      
                    </div>
                  </div>      

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">9. Rekomendasi Dinas Perhubungan dan Infokom Kab.Sumbawa Barat (untuk IMB Tower)  </label>
                    <div class="col-md-4">

                    <?php if ($rekom_dishub=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="rekom_dishub" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="rekom_dishub" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="rekom_dishub" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="rekom_dishub" class="radio-blue" value="tidak ada" checked="true">
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
                    <label class="col-md-8" for="text">1. Gambar rencana bangunan & site plan (3 (tiga) rangkap)  </label>
                    <div class="col-md-4">

                    <?php if ($tek_gamabar_rencana=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="tek_gamabar_rencana" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_gamabar_rencana" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="tek_gamabar_rencana" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_gamabar_rencana" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Instalasi air, listrik dan telepon  </label>
                    <div class="col-md-4">

                    <?php if ($tek_instalasi_air=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="tek_instalasi_air" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_instalasi_air" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="tek_instalasi_air" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_instalasi_air" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                      
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Penelitian tanah/sondir untuk ruko 3(tiga) lantai  </label>
                    <div class="col-md-4">

                    <?php if ($tek_penelitian_tanah=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="tek_penelitian_tanah" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_penelitian_tanah" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="tek_penelitian_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_penelitian_tanah" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                      
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Sistem pengamanan  </label>
                    <div class="col-md-4">

                    <?php if ($tek_pengaman=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="tek_pengaman" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_pengaman" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="tek_pengaman" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="tek_pengaman" class="radio-blue" value="tidak ada" checked="true">
                      </div>

                      <?php } ?>

                      
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Sistem drainase dan persampahan  </label>
                    <div class="col-md-4">

                    <?php if ($sistem_drainase=='ada') { ?>
                      
                      <div class="col-md-6">
                        <input type="radio" name="sistem_drainase" class="radio-blue" value="ada" checked="true">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sistem_drainase" class="radio-blue" value="tidak ada">
                      </div>

                    <?php }else{ ?>
                        
                        <div class="col-md-6">
                        <input type="radio" name="sistem_drainase" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="sistem_drainase" class="radio-blue" value="tidak ada" checked="true">
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
                    <i class="ti-layout-cta-left"></i> Verifikasi dan Data Kecamatan
               </h3>
            </div>
            <div class="panel-body">

            	<div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Petugas Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_petugas_verifikasi" id="nama_petugas_verifikasi" placeholder="Nama Petugas Verifikasi" value="<?php echo $nama_petugas_verifikasi; ?>">
                    </div>
                  </div>

                 <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" data-language='en' name="tgl_verifikasi" id="tgl_verifikasi" placeholder="Tanggal Verifikasi" value="<?php echo $tgl_verifikasi; ?>"  data-date-format="dd-mm-yyyy">
                    </div>
                  </div> 


                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" data-language='en' name="nama_camat" id="nama_camat" placeholder="Nama Camat" value="<?php echo $nama_camat; ?>">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">NIP Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" data-language='en' name="nip_camat" id="nip_camat" placeholder="Tanggal Verifikasi" value="<?php echo $nip_camat; ?>">
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
	<a href="<?php echo site_url('kec_imb') ?>"> <button style="border-radius: 8;" id="reset" type="button" class="btn btn-lg btn-danger">Kembali</button></a>
</div>



</form>


<?php 
$this->load->view($this->controller.'_form_view_js');
?>