     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css"> -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">
   <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>

   <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap-dialog.min.js"></script>
        <!-- Main content -->
      <style type="text/css">
        .modal-backdrop {
            z-index: -1;
        }
      </style>

        <form id="<?php echo $form; ?>" class="form-horizontal" method="post" 
        action="<?php echo site_url("$this->controller/$action"); ?>" role="form"> 

 


           


	<div class="form-group">
      <label class="col-sm-2 control-label">Username</label>
      <div class="col-sm-10">
        <input type="text" name="username" id="username" class="form-control input-style" placeholder="Username . . ." value="<?php echo isset($username)?$username:""; ?>">
        <input type="hidden" name="id" value="<?php echo isset($id)?$id:""; ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" name="p1" id="p1" class="form-control input-style" placeholder="Password.."  >
      </div>
    </div>
      <div class="form-group">
      <label class="col-sm-2 control-label">Ulangi Password</label>
      <div class="col-sm-10">
        <input type="password" name="p2" id="p2" class="form-control input-style" placeholder="Ulangi Password.."  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Nama </label>
      <div class="col-sm-10">
       
        <input type="text" name="nama" id="nama" class="form-control input-style" placeholder="Nama" 
        value="<?php echo isset($nama)?$nama:""; ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Level </label>
      <div class="col-sm-10">
       
        <?php echo form_dropdown("level",$arr_level,isset($level)?$level:"",'id="level" class="form-control input-style"'); ?>
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Kecamatan </label>
      <div class="col-sm-10">
       
        <?php echo form_dropdown("kecamatan",$arr_kecamatan,isset($kecamatan)?$kecamatan:"",'id="kecamatan" class="form-control input-style"'); ?>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="col-sm-2 control-label">No. HP</label>
      <div class="col-sm-10">
        <input type="text" name="no_hp"  value="<?php echo isset($no_hp)?$no_hp:""; ?>" id="no_hp" class="form-control input-style" placeholder="Nomor HP . . ."  >
      </div>
    </div>
     
    <div class="form-group">
      <label class="col-sm-2 control-label">Alamat</label>
      <div class="col-sm-10">
      <textarea name="alamat" id="alamat" class="form-control input-style" placeholder="Alamat . . ."><?php echo isset($alamat)?$alamat:""; ?></textarea>
      </div>
    </div>
    
    <div class="form-group pull-center">
        <div class="col-sm-offset-2 col-sm-9">
          <button id="<?php echo $action ?>" style="border-radius: 0;" type="submit" class="btn btn-primary"  >Simpan</button>
          <a href="<?php echo site_url("$this->controller"); ?>"><button style="border-radius: 0;" id="reset" type="button" class="btn btn-danger">Cancel</button></a>
        </div>
      </div>

 
  </form>


      <?php 
$this->load->view($this->controller."_form_view_js");
?>