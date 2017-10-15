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
                      <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="NIK Pemohon" value="<?php echo isset($no_ktp)?$no_ktp:''; ?>">
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
                      <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No. Telp" value="<?php echo isset($no_tlp)?$no_tlp:''; ?>">
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
                    <label class="control-label col-md-3" for="text">Nama Perusahaan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="merek_usaha" id="merek_usaha" placeholder="Nama Usaha" value="<?php echo isset($merek_usaha)?$merek_usaha:''; ?>" >
                    </div>
                  </div>

              <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Jenis Usaha</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Jenis Usaha" value="<?php echo isset($jenis_usaha)?$jenis_usaha:''; ?>" >
                    </div>
                  </div>


                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Lokasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="alamat_usaha" id="alamat_usaha" placeholder="Lokasi Usaha" value="<?php echo isset($alamat_usaha)?$alamat_usaha:''; ?>" >
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
                      <input type="text" class="form-control" name="klasif_perusahaan" id="klasif_perusahaan" placeholder="Klasifikasi Usaha" value="<?php echo isset($klasif_perusahaan)?$klasif_perusahaan:''; ?>" >
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="control-label col-md-3" for="text">Retribusi Pertahun Fiskal</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="retribusi_perthn_f" id="retribusi_perthn_f" placeholder="Retribusi Pertahun Fiskal" value="<?php echo isset($retribusi_perthn_f)?$retribusi_perthn_f:''; ?>" >
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
                    <label class="col-md-8" for="text">1.  AD / ADRT  </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="adrt" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="adrt" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Notulen Rapat</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="notulen" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="notulen" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Daftar Hadir Rapat Anggota</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="daftar_anggota" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="daftar_anggota" class="radio-blue" value="tidak ada">
                      </div>
                    </div>
                  </div> 

                 <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Rekomendasi UPTD Koperasi</label>
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
                    <label class="col-md-8" for="text">5. Mengetahui Lurah/ Kepala Desa </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="mengetahui_lurah" class="radio-blue" value="ada">
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="mengetahui_lurah" class="radio-blue" value="tidak ada">
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
                    <label class="col-md-8" for="text">1. AD / ADRT </label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="adrt" class="radio-blue" value="ada" <?php if ($adrt=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="adrt" class="radio-blue" value="tidak ada" <?php if ($adrt=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">2. Notulen Rapat</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="notulen" class="radio-blue" value="ada" <?php if ($notulen=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="notulen" class="radio-blue" value="tidak ada" <?php if ($notulen=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div>   

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">3. Daftar Hadir Rapat Anggota</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="daftar_anggota" class="radio-blue" value="ada" <?php if ($daftar_anggota=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="daftar_anggota" class="radio-blue" value="tidak ada" <?php if ($daftar_anggota=='tidak ada') { echo 'checked="true"'; } ?>>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group p-10">
                    <label class="col-md-8" for="text">4. Rekomendasi UPTD Koperasi</label>
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
                    <label class="col-md-8" for="text">5. Mengetahui Lurah/ Kepala Desa</label>
                    <div class="col-md-4">
                      <div class="col-md-6">
                        <input type="radio" name="mengetahui_lurah" class="radio-blue" value="ada" <?php if ($mengetahui_lurah=='ada') { echo 'checked="true"'; } ?>>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" name="mengetahui_lurah" class="radio-blue" value="tidak ada" <?php if ($mengetahui_lurah=='tidak ada') { echo 'checked="true"'; } ?>>
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
                    <label class="control-label col-md-3" for="text">No. Registrasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="no_register" id="no_register" placeholder="No. Registrasi" value="<?php echo isset($no_register)?$no_register:''; ?>" >
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