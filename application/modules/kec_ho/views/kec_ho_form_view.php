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
                    <label class="control-label col-md-3" for="text">Tanggal Surat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control tanggal" data-language='en' name="tgl_surat" id="tgl_surat" placeholder="Tanggal Surat">
                    </div>
                  </div>

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
                    <label class="col-md-8" for="text">1. Fotokopi KTP pemohon/penanggung jawab yang masih berlaku bagi pemohon perseorangan atau akta pendirian perusahaan bagi pemohon yang berbadan hukum. </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fk_ktp_pemohon" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fk_ktp_pemohon" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Fotokopi bukti kepemilikan tanah (sertifikat/akta jual beli)   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fk_sertifikat_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fk_sertifikat_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Fotokopi Izin peruntukan penggunaan tanah/izin lokasi (dilampirkan bagi bangunan tempat usaha  yang menggunakan lahan seluas 500m2 atau lebih)</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fk_surat_peruntukan_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fk_surat_peruntukan_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Fotokopi Izin Mendirikan Bangunan    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fk_imb" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fk_imb" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">5. Surat Pernyataan tidak keberatan dari pemilik tanah/bangunan (dilampirkan bagi tempat usaha yang menggunakan tanah/bangunan milik orang lain)  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="spt_keberatan_pemilik_tanah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="spt_keberatan_pemilik_tanah" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">6. Surat pernyataan tidak keberatan dari tetangga lingkungan terdekat    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="spt_keberatan_tetangga" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="spt_keberatan_tetangga" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">7. Surat pernyataan pencegahan pengendalian gangguan dan pencemaran lingkungan   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="sp_gagguan_pencemaran" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="sp_gagguan_pencemaran" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">8. Fotokopi bukti setoran retribusi HO  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="fk_storan_ho" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="fk_storan_ho" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>      

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">9. Materai Rp 6000 sebanyak 2 (dua) lembar  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                      	<input type="radio" name="materai_6000" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                      	<input type="radio" name="materai_6000" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">10. Fotokopi Surat Izin Tempat Usaha yang masih berlaku    </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="fk_situ" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fk_situ" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">11. Fotokopi NPWP   </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="fc_npwp" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="fc_npwp" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">12. Asli Berita Acara Pemeriksaan Tempat dari Kepolisian jika usaha berkapasitas besar (tim teknis harus turun ke lapangan)  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="berita_acara" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="berita_acara" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">13. Pas Photo warna pemohon yang merupakan penanggung jawab/pemilik/pengurus perusahaan sebanyak 3x4 (4 lembar)  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="pas_photo" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="pas_photo" class="radio-blue" value="tidak ada">
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
                    <i class="ti-layout-cta-left"></i> Verifikasi dan Data Kecamatan
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


                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Nama Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nama_camat" id="nama_camat" placeholder="Nama Camat">
                    </div>
                  </div>

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">NIP Camat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="nip_camat" id="nip_camat" placeholder="NIP Camat">
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
	<a href="<?php echo site_url('kec_ho'); ?>"><button style="border-radius: 8;" id="reset" type="button" class="btn btn-lg btn-danger">Kembali</button></a>
</div>



</form>


<?php 
$this->load->view($this->controller.'_form_view_js');
?>