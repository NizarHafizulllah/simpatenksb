<!DOCTYPE html>
<html>

<head>
    <title>SIMPaten Sumbawa Barat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/ksb.png"/>
    <!--page level css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/sweetalert2/css/sweetalert2.min.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link href="<?php echo base_url(); ?>assets/css/pages/login_register.css" rel="stylesheet">
    <!--end of page level css-->
    <style type="text/css">
      body  {
    background-image: url('<?php echo base_url(); ?>assets/img/backgrounds/1.jpg');
    background-color: #cccccc;
            }
      .signin-form{
        background-image: url('<?php echo base_url(); ?>assets/img/backgrounds/hello.jpg');
       background-color: transparent;
      }
    </style>
</head>

<body >
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 signin-form" style="opacity: 0.8" >
            <div class="panel-header">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center page-name" style="font-family: ; font-size: 30px;">
                          <div class="row">SIMPaten</div> 
                          <div class="row">Sumbawa Barat</div>
                            
                        </h2>
                    </div>
                </div>
               
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <span class="active page-name">Masuk</span>
                        
                    </div>
                </div>
                <div class="row">
                    <form role="form" action="" method="post" class="login-form">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Nama Pengguna</label>
                                <input type="text" class="form-control  form-control-lg" id="form-username" name="form-username"
                                       placeholder="Nama Pengguna">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control form-control-lg" id="form-password"
                                       name="form-password" placeholder="Kata Sandi">
                                       <input type="hidden" id="mask" name="mask" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            &nbsp;
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                
                                <button type="button" class="btn btn-primary" id="masuk">Masuk !</button>


                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr class="separator">
                        </div>
                        <div class="col-md-12 text-center">
                            &nbsp;
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- begining of page level js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/iCheck/js/icheck.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/login_register.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendors/sweetalert2/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/alerts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.md5.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#masuk').on('click', function () {
            

             $("#mask").val($.md5($("#form-password").val()));
            $("#form-password").val('');

            var username = $("#form-username").val();
            var mask = $("#mask").val();



            var data = 'username='+ username  + '&mask='+ mask;

            $.ajax({
                                url : '<?php echo site_url("login/ceklogin") ?>',
                                type : 'post',
                                dataType : 'json',
                                data : data,
                                success : function(hasil){

                                    if(hasil.error == false && hasil.level == 1) {

                                       
                                            swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Admin Kecamatan',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     

                                                window.location.href = '<?php echo site_url("admin"); ?>';
           
                  
                                    }else if(hasil.error == false && hasil.level == 2){
                                        swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Admin Kabupaten',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     

                                                window.location.href = '<?php echo site_url("kabupaten"); ?>';
                                    }else if(hasil.error == false && hasil.level == 3){
                                        swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Super Admin',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     

                                                window.location.href = '<?php echo site_url("super_admin"); ?>';
                                    }else if(hasil.error == false && hasil.level == 4){
                                        swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Penyetuju Kecamatan',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     

                                                window.location.href = '<?php echo site_url("app_kecamatan"); ?>';
                                    }else if(hasil.error == false && hasil.level == 5){
                                        swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Operator Kecamatan',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     

                                                window.location.href = '<?php echo site_url("operator_kecamatan"); ?>';
                                    }
                                    else {
                                         swal({
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-danger',
                                                title: 'Login Gagal',
                                                text: 'Kombinasi Username Dan Password Anda Salah',
                                                type: 'error'
                                            }
                                        )
                                        
                                    }
                                }

                            });
        });
      });
    </script>  

<!-- end of page level js -->
</body>

</html>

