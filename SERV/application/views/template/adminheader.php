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
    <link rel="stylesheet" href="<?php echo base_url()?>https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="<?php echo base_url()?>https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                                        <li><a href="<?=site_url('dashboard')?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="" href="<?=site_url('dashboard')?>" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-label">Master</li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_vendor')?>" aria-expanded="false">
                            <i class="mdi mdi-account-outline menu-icon"></i> <span class="nav-text">Vendor</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_jnssparepart')?>" aria-expanded="false">
                            <i class="mdi mdi-gauge menu-icon"></i> <span class="nav-text">Jenis Sparepart</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_sparepart')?>" aria-expanded="false">
                            <i class="mdi mdi-steam menu-icon"></i> <span class="nav-text">Sparepart</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_aksesoris')?>" aria-expanded="false">
                            <i class="mdi mdi-webhook menu-icon"></i> <span class="nav-text">Aksesoris</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_apparel')?>" aria-expanded="false">
                            <i class="mdi mdi-tshirt-v menu-icon"></i><span class="nav-text">Apparel</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_motor')?>" aria-expanded="false">
                            <i class="mdi mdi-motorbike menu-icon"></i><span class="nav-text">Motor</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_dservice')?>" aria-expanded="false">
                            <i class="mdi mdi-wrench menu-icon"></i><span class="nav-text">Data Servis</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_pegawai')?>" aria-expanded="false">
                            <i class="mdi mdi-account-multiple-outline menu-icon"></i> <span class="nav-text">Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ms_pelanggan')?>" aria-expanded="false">
                            <i class="mdi mdi-account-card-details menu-icon"></i> <span class="nav-text">Pelanggan</span>
                        </a>
                    </li>
                    <li class="nav-label">Transaksi</li>
                    <!-- <li>
                        <a class="" href="<?=site_url('c_ts_pembelian')?>" aria-expanded="false">
                            <i class="mdi mdi-cube-outline menu-icon"></i><span class="nav-text">Pembelian Barang</span>
                        </a>
                    </li> -->
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-account-outline menu-icon"></i> <span class="nav-text">Pembelian Barang</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?=site_url('c_ts_pembelian/listSP')?>">Sparepart</a></li>
                            <li><a href="<?=site_url('c_ts_pembelian/listAKS')?>">Aksesoris</a></li>
                            <li><a href="<?=site_url('c_ts_pembelian/listAPP')?>">Apparel</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="<?=site_url('c_ts_servis')?>" aria-expanded="false">
                            <i class="mdi mdi-wrench menu-icon"></i><span class="nav-text">Servis Motor</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-bike menu-icon"></i><span class="nav-text">Penjualan Motor</span>
                        </a>
                    </li>
                    <li class="nav-label">Laporan</li>
                    <li>
                        <a class="" href="<?=site_url('c_lap_penjualan')?>" aria-expanded="false">
                            <i class="mdi mdi-chart-pie menu-icon"></i><span class="nav-text">Penjualan</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-chart-line menu-icon"></i><span class="nav-text">Pembelian</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>