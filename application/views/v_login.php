<!DOCTYPE html>
<html>
<head>


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
<body style="background-color:#D0CAB2;">
    <div class="container" style="display: flex; justify-content:center; align-items:center; height:100vh; ">
        <div class="card" style="display: flex; justify-content:center; align-items:center;">
            <div class="card-body">
                <form action="<?php echo base_url('index.php/login/aksi_login');?>" method="post">
                    <h2 class="text-center font-weight-bold">Sistem Inventory Obat</h2>
                    <h5 class="text-center mb-4">Klinik Pratama Rahmat Medika</h5>
                    <h5 class="card-title text-center mb-4">LOGIN</h5>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user"> Login </i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>