
<?php 
$userdata = $this->session->userdata('admin_login');
?>




    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/custom.css"> -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/pages/user_profile.css">
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/ckeditor/ckeditor.js"></script>

<script type="text/javascript"></script>
   
<div class="row">

	<div class="col-md-12">
		<div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> <a href="<?php echo site_url('profil_kecamatan') ?>" style="color: blue;">Profil</a>  &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo site_url('profil_kecamatan/kecamatan') ?>" style="color: blue;"> Profil Kecamatan</a>  &nbsp;&nbsp;&nbsp;&nbsp; Tentang Kecamatan
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

        <form id="form_simpan" class="form-horizontal" method="post" action="simpan" role="form"> 

             
             	<div class="form-group">
                   	<div class="col-sm-12">
                        <textarea class="ckeditor" id="tentang" name="tentang"><?php echo $tentang ?></textarea>
                        <input type="hidden" name="id_kecamatan" value="<?php echo $id_kecamatan ?>">
                   	</div>
               	</div>
               	

               
                <div class="form-group">
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
$this->load->view("tentang_kecamatan_view_js");
?>