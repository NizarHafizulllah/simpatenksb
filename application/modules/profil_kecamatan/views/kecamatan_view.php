
<?php 
$userdata = $this->session->userdata('admin_login');
?>




    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/custom.css"> -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/pages/user_profile.css">
<script type="text/javascript"></script>
   
<div class="row">
	<div class="col-md-4">
		<div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/images/user.png') ?>" alt="User profile picture">
                <h3 class="profile-username text-center"><?php echo $user['nama']; ?></h3>
                <p class=" text-center">Admin Kecamatan</p>
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Username</b> <a class="pull-right"><?php echo $user['username'] ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Kecamatan </b> <a class="pull-right"><?php echo $user['kecamatan'] ?></a>
                    </li>
                </ul>

                
            </div>
                        <!-- /.box-body -->
        </div>
	</div>
	<div class="col-md-8">
		<div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> <a href="<?php echo site_url('profil_kecamatan') ?>" style="color: blue;">Profil</a>  &nbsp;&nbsp;&nbsp;&nbsp; Profil Kecamatan  
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

        <form id="form_simpan" class="form-horizontal" method="post" action="simpan" role="form"> 

             
             	<div class="form-group">
                   	<label for="nama" class="col-sm-3 control-label">Nama Camat</label>
                   	<div class="col-sm-9">
                      	<input id="nama_camat" name="nama_camat" type="text" placeholder="Nama" class="form-control required" value="<?php echo $nama_camat; ?>"/>
                        <input type="hidden" name="id_kecamatan" value="<?php echo $id_kecamatan ?>">
                   	</div>
               	</div>
               	<div class="form-group">
                   	<label for="nama" class="col-sm-3 control-label">NIP Camat </label>
                   	<div class="col-sm-9">
                      	<input id="nip_camat" name="nip_camat" type="text" placeholder="NIP Camat" class="form-control required" value="<?php echo $nip_camat; ?>"/>
                   	</div>
               	</div>
               	<div class="form-group">
                   	<label for="nama" class="col-sm-3 control-label">Tahun Pembentukan </label>
                   	<div class="col-sm-9">
                      	<input id="tahun_pembentukan" name="tahun_pembentukan" type="text" placeholder="Tahun Pembentukan" class="form-control required" value="<?php echo $tahun_pembentukan; ?>" />
                   	</div>
               	</div>

                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">No. Perda Pembentukan </label>
                    <div class="col-sm-9">
                        <input id="no_perda_pembentukan" name="no_perda_pembentukan" type="text" placeholder="No. Perda Pembentukan" class="form-control required" value="<?php echo $no_perda_pembentukan; ?>" />
                    </div>
                </div>


                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Alamat Kecamatan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="alamat_kecamatan" id="alamat_kecamatan"><?php echo $alamat_kecamatan; ?></textarea>
                    </div>
                </div>

               
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">&nbsp;</label>
                    <div class="col-sm-3">
                        <button class="btn btn-primary form-control" id="simpan">Simpan</button>
                    </div>
                </div>

               	</form>

             </div>           
			
		</div>
	</div>
</div>





<?php 
$this->load->view("kecamatan_view_js");
?>