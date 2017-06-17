<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/datatables.css">

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
                    <label class="control-label col-md-3" for="text">No. Registrasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_regis" id="no_regis" placeholder="No. Registrasi">
                    </div>
                  </div>

                 <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Pemohon</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" placeholder="Nama Pemohon">
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Alamat</label>
                    <div class="col-md-9">
                      <textarea rows="3" class="form-control resize_vertical" name="alamat" id="alamat" placeholder="Alamat"></textarea>
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
                      <div class="col-md-6">
                      	<input type="radio" name="pimb" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="pimb" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Fotokopi KTP Pemilik ( 3 rangkap)  </label>
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
                    <label class="col-md-8" for="text">4. Fotokopi Sertifikat Tanah / SKGR Camat (3 (tiga) rangkap)   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sertifikat_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sertifikat_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Fotokopi PBB (3 (tiga) rangkap)  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="pbb" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="pbb" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">6. BAP / Rekomendasi UPTD TARCIP setempat  (3 (tiga) rangkap)   </label>
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
                      	<input type="radio" name="penelitian_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="penelitian_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">8. Surat Persetujuan Sempada Tanah  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="setuju_sempada_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="setuju_sempada_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>      

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">9. Rekomendasi Dinas Perhubungan dan Infokom Kab.Sumbawa Barat (untuk IMB Tower)  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="rekom_dishub" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="rekom_dishub" class="radio-blue" value="tidak ada">
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
                    <label class="col-md-8" for="text">1. Gambar rencana bangunan & site plan (3 (tiga) rangkap)  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="tek_gamabar_rencana" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="tek_gamabar_rencana" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Instalasi air, listrik dan telepon  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="tek_instalasi_air" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="tek_instalasi_air" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Penelitian tanah/sondir untuk ruko 3(tiga) lantai  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="tek_penelitian_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="tek_penelitian_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Sistem pengamanan  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="tek_pengaman" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="tek_pengaman" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Sistem drainase dan persampahan  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sistem_drainase" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sistem_drainase" class="radio-blue" value="tidak ada">
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
                    <i class="ti-layout-cta-left"></i> Verifikasi
               </h3>
            </div>
            <div class="panel-body">

            	<div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Petugas Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_petugas_verifikasi" id="nama_petugas_verifikasi" placeholder="Nama Petugas Verifikasi">
                    </div>
                  </div>

                 <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Tanggal Verifikasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" data-language='en' name="tgl_verifikasi" id="tgl_verifikasi" placeholder="Tanggal Verifikasi">
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
	<a href="<?php echo site_url('kec_imb'); ?>"><button style="border-radius: 8;" id="reset" type="button" class="btn btn-lg btn-danger">Cancel</button></a>
</div>



</form>


<?php 
$this->load->view($this->controller.'_form_view_js');
?>