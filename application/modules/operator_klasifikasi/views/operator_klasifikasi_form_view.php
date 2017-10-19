     <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">
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
      <label class="col-sm-2 control-label">Kode</label>
      <div class="col-sm-10">
        <input type="text" name="kode" id="kode" class="form-control input-style" placeholder="Kode . . ." value="<?php echo isset($kode)?$kode:""; ?>">
        <input type="hidden" name="id" value="<?php echo isset($id)?$id:""; ?>">
      </div>
    </div>
    
    

    <div class="form-group">
      <label class="col-sm-2 control-label">Klasifikasi </label>
      <div class="col-sm-10">
       
        <input type="text" name="klasifikasi" id="klasifikasi" class="form-control input-style" placeholder="Klasifikasi" 
        value="<?php echo isset($klasifikasi)?$klasifikasi:""; ?>">
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