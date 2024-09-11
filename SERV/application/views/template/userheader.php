<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SERV Motor</title>
    <!-- Favicon icon -->
    <!--<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>_assets/images/favicon.png"> <!-- ikon -->
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url()?>_assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>_assets/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url()?>_assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?=site_url('dashboard')?>">
                    <b class="logo-abbr"><p style="color:white;font-size:95%;">SERV</p></b>
                    <span class="logo-compact">
                    <p style="color:white;font-size:140%;">SERV Motor</p>
                    </span>
                    <span class="brand-title">
                        <p style="color:white;font-size:140%;">SERV Motor</p>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <img src="<?php echo base_url()?>_assets/images/user/form-user.png" height="" width="" alt=""> <!--foto user-->
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="<?=site_url('c_ts_penjualan/listKRJ')?>"><i class="fa fa-shopping-cart"></i></i> <span>Keranjang</span></a></li>
                                        <li><a href="<?=site_url('dashboard')?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="" href="<?=site_url('dashboard')?>" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-account-outline menu-icon"></i> <span class="nav-text">Beli Barang</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?=site_url('c_ts_penjualan/listSP')?>">Sparepart</a></li>
                            <li><a href="<?=site_url('c_ts_penjualan/listAKS')?>">Aksesoris</a></li>
                            <li><a href="<?=site_url('c_ts_penjualan/listAPP')?>">Apparel</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ts_penjualan_motor')?>" aria-expanded="false">
                            <i class="mdi mdi-gauge menu-icon"></i> <span class="nav-text">Beli Motor</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ts_servis_motor')?>" aria-expanded="false">
                            <i class="mdi mdi-steam menu-icon"></i> <span class="nav-text">Pesan Servis</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>