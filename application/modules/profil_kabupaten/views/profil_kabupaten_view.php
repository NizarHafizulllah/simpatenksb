


<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">
   <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>

   <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap-dialog.min.js"></script>
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/pages/user_profile.css">
<script type="text/javascript"></script>
    <!-- Main content -->
      <!-- <style type="text/css">
        .modal-backdrop {
            z-index: -1;
        }
      </style> -->


<div class="row">
	<div class="col-md-4">
		<div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/images/user.png') ?>" alt="User profile picture">
                <h3 class="profile-username text-center"><?php echo $user['nama']; ?></h3>
                <p class=" text-center">Admin Kabupaten</p>
                

                
            </div>
                        <!-- /.box-body -->
        </div>
	</div>
	<div class="col-md-8">
		<div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Profil  
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

        <form id="form_simpan" class="form-horizontal" method="post" action="simpan" role="form"> 

             
             	<div class="form-group">
                   	<label for="nama" class="col-sm-3 control-label">Nama</label>
                   	<div class="col-sm-9">
                      	<input id="nama" name="nama" type="text" placeholder="Nama" class="form-control required" value="<?php echo $user['nama']; ?>"/>
                   	</div>
               	</div>
               	<div class="form-group">
                   	<label for="nama" class="col-sm-3 control-label">Telp. </label>
                   	<div class="col-sm-9">
                      	<input id="no_hp" name="no_hp" type="text" placeholder="Telp." class="form-control required" value="<?php echo $user['no_hp']; ?>"/>
                   	</div>
               	</div>
               	<div class="form-group">
                   	<label for="nama" class="col-sm-3 control-label">Email </label>
                   	<div class="col-sm-9">
                      	<input id="email" name="email" type="text" placeholder="Email" class="form-control required" value="<?php echo $user['email']; ?>" />
                   	</div>
               	</div>
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Pasword Baru </label>
                    <div class="col-sm-9">
                        <input type="password" name="p1" id="p1" class="form-control input-style" placeholder="Password Baru (Isi Jika Ingin Mengganti Password)"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Ulangi Pasword Baru </label>
                    <div class="col-sm-9">
                        <input type="password" name="p2" id="p2" class="form-control input-style" placeholder="Ulangi Password.."  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Alamat </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" id="alamat"><?php echo $user['alamat']; ?></textarea>
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


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Profil</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <b>Konfirmasi Data</b>
                            </div>
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-3">Nama</div>
                                <b><div class="col-sm-6" id="span_nama"></div></b>
                                <b><div class="col-sm-3" id="status_nama"></div></b>
                              </div>
                              <div class="row">
                                <div class="col-md-3">Password</div>
                                <b><div class="col-sm-6" id="span_password">-----------------------------</div></b>
                                <b><div class="col-sm-3" id="status_password"></div></b>
                              </div>
                              <div class="row">
                                <div class="col-md-3">Email</div>
                                <b><div class="col-sm-6" id="span_email"></div></b>
                                <b><div class="col-sm-3" id="status_email"></div></b>
                              </div>
                              <div class="row">
                                <div class="col-md-3">No. Hp</div>
                                <b><div class="col-sm-6" id="span_no_hp"></div></b>
                                <b><div class="col-sm-3" id="status_no_hp"></div></b>
                              </div>
                              <div class="row">
                                <div class="col-md-3">Alamat</div>
                                <b><div class="col-sm-6" id="span_alamat"></div></b>
                                <b><div class="col-sm-3" id="status_alamat"></div></b>
                              </div>
                              <div class="row">
                                <div class="col-md-3">&nbsp;</div>
                                <b><div class="col-sm-4">&nbsp;</div></b>
                              </div>
                            </div>

                            
                            <div class="form-group">
                                <b>Konfirmasi Kata Sandi</b>
                            </div>
                              <form id="form_konfirm" class="form-horizontal" method="post" action="konfirm" role="form"> 
                            <div class="form-group">
                                <input class="form-control" name="password" id="password" type="password" placeholder="Konfirmasi Password">
                            </div>
                              
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-success" id="konfirm_password">
                                <span class="glyphicon glyphicon-ok-sign"></span> Update
                            </button>
                        </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>



<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="error" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading">Error</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                <span class="glyphicon glyphicon-info-sign" id="coba"> </span>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                <span class="glyphicon glyphicon-ok-sign"></span> Tutup !
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

<?php 
$this->load->view($this->controller."_view_js");
?>