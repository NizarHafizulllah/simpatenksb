<?php 
$userdata = $this->session->userdata('admin_login');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title><?php echo $title ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>

    
    <!-- global css -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!-- end of global css -->
</head>

<body>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="<?php echo site_url('admin'); ?>" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="<?php echo base_url(); ?>assets/img/logo_blue.png" alt="logo"/>
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
                            <a href="<?php echo site_url('profil_kecamatan'); ?>">
                                Profile<i class="fa fa-fw fa-user pull-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout_admin'); ?>">
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
                            <p>Admin</p>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>

                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Izin Tempat Usaha Distribusi Pelayanan Obat Skala Kecamatan (Apotek dan Toko Obat)</span>

                        </a>
                        <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Izin Penggunaan/Pemanfaatan Jaringan Irigasi Tersiar Dalam Satu Wilayah Kecamatan Bagi Pengurusan Kepentingan Pertanian</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Tanda Dafar Industri (TDI) Bagi Industri Mikro, Tradisional dan Rumah Tangga Dengan Nilai Investasi Peralatan Sampai Dengan 50.000.000,00-</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">SIUP (modal <= 50.000.000)</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">SITU (luas <= 150m2)</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">IMB (luas <= 250m2)</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">HO</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">UPTL (yang berdomisili di kecamatan dengan kapasitas maksimal 40 PK)</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">pemberian, pembatalan, penutupan izin usaha depot dan pangkalan minyak
Pemberian, pembatalan, penutupan dan perpanjangan izin usaha pengumpulan dan penyaluran pelumas bebas</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Surat izin usaha perseorangan operasiproduksi untuk usaha perdagangan umu untuk jenis bahan galian pasir diluar sungai, tanah urug, tanah liat dengan luas maksimal 1000 m2 dan tidak menggunkan alat bera dan peledak</span>
                        </a>
                    </li>
                    
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
<!-- end of page level js -->
</body>

</html>
