<?php 
$userdata = $this->session->userdata('adminkab_login');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-dialog.min.css">

    
    <!-- global css -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link href="<?php echo base_url(); ?>assets/vendors/notific/css/jquery.notific8.min.css" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/vendors/airdatepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/datatables.css">

</head>

<body>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="<?php echo site_url('admin'); ?>" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="javascript:void(0)" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="javascript:void(0)" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/images/user.png') ?>" class="img-circle img-responsive pull-left" alt="User Image">
                        <div class="riot">
                            <div>
                                <i class="caret"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User name-->
                        <li class="user-name text-center">
                            <span><?php echo $userdata['nama']; ?></span>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3">
                            <a href="user_profile.html">
                                Profile<i class="fa fa-fw fa-user pull-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout_adminkab'); ?>">
                                Logout <i class="fa fa-fw fa-sign-out pull-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-aside">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        
                        <div class="content-profile">
                            <h4 class="media-heading">
                                <?php echo $userdata['nama']; ?>
                            </h4>
                            <p>Admin Kabupaten</p>
                        </div>
                    </div>
                </div>
                <ul class="navigation">

<li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-users"></i>
                            <span>Admin Kecamatan</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                               <a href="<?php echo site_url('kab_add_kecamatan'); ?>">
                                    <i class="fa fa-fw fa-user"></i> Lihat Data
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('kab_add_kecamatan/baru'); ?>">
                                    <i class="fa fa-fw fa-user-plus"></i> Tambah Data
                                </a>
                            </li>
                        </ul>
                    </li>


<li class="menu-dropdown"> 
        <a href="#">
            <i class="menu-icon fa fa-desktop"></i>
            <span>PERIJINAN</span>
            <span class="fa arrow"></span>
        </a>
                        <ul class="sub-menu">
                            <li>

                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">1. Izin Apotak &amp; Toko Obat </span>

                        </a>
                        <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">2. Izin Jaringan Irigasi </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">3. TDI Industri Mikro</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">4. SIUP </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">5. SITU </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('kab_imb'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">6. IMB </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">7. Ijin Gangguan (HO)</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">8. UPTL  </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">9. Ijin Depo Pangkalan Minyak </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span class="mm-text ">10. Surat izin usaha</span>
                        </a>
                    </li>
                    
                    </li>
                        </ul>
                    </li>
 <li class="menu-dropdown"> 

        <a href="#">
            <i class="menu-icon fa fa-files-o"></i>
            <span>NON PERIJINAN</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">



           
            <li>

            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">1. Pendirian Sekolah</span>

            </a>
            </li>


            <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">2. Izin Tempat Kerja </span>
            </a>

            </li>


            <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">3. Izin Usaha Depot Isi Ulang </span>
            </a>

            </li>

             <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">4. Rek. Pembentukan P3A </span>
            </a>

            </li>


           

             <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">5. Izin Pemakaian Lahan Bekas </span>
            </a>

            </li>

              <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">6. IMB Perusahaan & Perumahan </span>
            </a>

            </li>
              <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">7. Domisili Koperasi & UKM </span>
            </a>

            </li>

              <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">8. Ijin Pendirian Koperasi</span>
            </a>

            </li>

              <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">9. Rek. Modal UMKM</span>
            </a>

            </li>


              <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">10. Rek. LPK</span>
            </a>

            </li>

               <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">11. Rek. Menara Seluler</span>
            </a>

            </li>

            <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">12. Rek. Ijin Trayek</span>
            </a>

            </li>

            <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">13. Rek. Organisasi Sosial</span>
            </a>

            </li>

              <li>
            <a href="<?php echo site_url('admin'); ?>">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span class="mm-text ">14. Rek. Pemberian Penghargaan</span>
            </a>

            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">15. Rek. Tempat Pembudidayaan Perikanan</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">16. Rek. Tempat Pembudidayaan Perkebunan</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">17. Rek. Tempat Budidaya Perkebunan</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">18. Rek. Pengolahan Hasil Perkebunan</span>
                </a>
            </li>


            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">19. Rek. Pengolahan Sarang Burung , Madu dan Jamur</span>
                </a>
            </li>

             <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">20. Rek. Usaha Tenaga  Kelistrikan</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">21. Rek. Industri Pengusulan Modal</span>
                </a>
            </li>

             <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">22. Surat Ket. Penanaman Modal</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">23. Rek. Usaha SBBM</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">24. Rek. UPTL </span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">25. Rek. Pemanfaatan Tenaga Kerja Lokal </span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">26. Rek. Usaha Pertambangan &amp; Energi </span>
                </a>
            </li>


            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">27. Rek. HO Besar dan Sedang </span>
                </a>
            </li>

             <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">28. Rek. Izin Tempat Usaha  </span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">29. Surat Keterangan Ahli Waris </span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">30. Surat Keterangan Pindah </span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">31. Rekomendasi Akte Kelahiran </span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">32. Surat Pengantar Pengurusan KTP </span>
                </a>
            </li>

             <li>
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-fw fa-file-text-o"></i>
                    <span class="mm-text ">33. Surat Keterangan kurang mampu </span>
                </a>
            </li>





        </ul>
</li>
                    
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-aside view-port-height">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><?php echo $subtitle ?></h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                <?php echo $content ?>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->



<!-- global js -->
<script src="<?php echo base_url(); ?>assets/js/app.js" type="text/javascript"></script>
<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>  
<script src="<?php echo base_url("assets") ?>/vendors/airdatepicker/js/datepicker.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/vendors/airdatepicker/js/datepicker.en.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendors/notific/js/jquery.notific8.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendors/iCheck/js/icheck.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-dialog.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(".tanggal").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd-mm-yyyy"
});
    
    $(".tanggal").datepicker().on('changeDate', function(ev){                 
             $('.tanggal').datepicker('hide');
        });

    $(".content .row").find('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });

    $('[type="reset"]').on('click', function () {
        setTimeout(function () {
            $("input").iCheck("update");
        }, 10);
    });
</script> 

<!-- global js -->
<!-- end of page level js -->
</body>

</html>
