<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <!--  -->
    <!-- JQuery UI CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/jquery/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jquery/jquery-ui.structure.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jquery/jquery-ui.theme.css')?>">
    <!--  -->

    <!-- JQuert -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--  -->

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--  -->

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/regular.css" integrity="sha384-e7wK18mMVsIpE/BDLrCQ99c7gROAxr9czDzslePcAHgCLGCRidxq1mrNCLVF2oaj" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/brands.css" integrity="sha384-S5yUroXKhsCryF2hYGm7i8RQ/ThL96qmmWD+lF5AZTdOdsxChQktVW+cKP/s4eav" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!--  -->
    
    <script src="<?php echo base_url();?>assets/jquery/jquery-ui.js" type="text/javascript"></script>
    
    <title>Klinik Pratama Rahmat Medika</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php base_url('dashboard')?>">Klinik Pratama Rahmat Medika</a>
    <a class="navbar-brand float-right" href="<?php echo base_url('index.php/login/logout');?>"><i class="fas fa-sign-out-alt"> Logout </i></a>
    </nav>
    <div class="row w-100">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang</h5>
                    <h6 class="card-subtitle mb-2 text-muted mt-3">
                        <i class="fas fa-user"><div class="mr-4"></div></i><?php echo $this->session->userdata("nama");?>
                    </h6>
                </div>
            </div>
            <div class="card-body text-left">
                <a style="font-size:large;"  class="btn btn-block btn-link" href="<?php echo base_url('index.php/dashboard/stok_obat');?>">Stok Obat</a>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: large;">
                        Transaksi
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <a style="font-size:large;"  class="btn btn-block btn-link" href="<?php echo base_url('index.php/dashboard/obat_masuk')?>">Obat Masuk</a>
                        </div>
                        <div class="card-body">
                            <a style="font-size:large;"  class="btn btn-block btn-link" href="<?php echo base_url('index.php/dashboard/obat_keluar')?>">Obat Keluar</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-center" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo"  style="font-size: large;">
                        Laporan
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block btn-link" href="<?php echo base_url('index.php/dashboard/daftar_obat_masuk')?>">Laporan Obat Masuk</a>
                        </div><div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block btn-link" href="<?php echo base_url('index.php/dashboard/daftar_obat_keluar')?>">Laporan Obat Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body text-left">
                <a style="font-size:large;"  class="btn btn-block btn-link" href="<?php echo base_url('index.php/dashboard/pengaturan_obat');?>">Master Obat</a>
            </div>
<!--             
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="">
                        <p style="font-size: 16px;">Inventori Obat</p>
                    </h2>
                    </div>
                    <div id="" class="" aria-labelledby="headingOne" data-parent="#accordionExample" >
                        <div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block" href="<?php echo base_url('index.php/dashboard/stok_obat');?>">Stok Obat</a>
                        </div>
                        <div class="accordion" id="headingtransaksi"></div>
                        <div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block" href="<?php echo base_url('index.php/dashboard/obat_masuk')?>">Obat Masuk</a>
                        </div>
                        <div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block" href="<?php echo base_url('index.php/dashboard/daftar_obat_masuk')?>">Laporan Obat Masuk</a>
                        </div>
                        <div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block" href="<?php echo base_url('index.php/dashboard/obat_keluar')?>">Obat Keluar</a>
                        </div>
                        <div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block" href="<?php echo base_url('index.php/dashboard/daftar_obat_keluar')?>">Laporan Obat Keluar</a>
                        </div>
                        <div class="card-body">
                            <a style="font-size:larger;"  class="btn btn-block" href="<?php echo base_url('index.php/dashboard/pengaturan_obat');?>">Master Obat</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="col-md-9">
            