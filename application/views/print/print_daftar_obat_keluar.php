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

<div class="container">
    <h5 class="text-center mt-5">Laporan Obat Keluar</h5>
    <h6 class="text-center mt-2">Klinik Pratama Rahmat Medika</h6>
    <table style="width: 200px;">
        <tr>
            <td>
                <h6>Dari</h6>
            </td>
            <td>
                <h6><?php echo $mulaitgl;?></h6>
            </td>
        </tr>
        <tr>
            <td>
                <h6>Hingga</h6>
            </td>
            <td>
                <h6><?php echo $sampaitgl;?></h6>
            </td>
        </tr>
    </table>
    <table class="table table-hover mt-4">
        <thead class="thead-dark">
            <th>Nomor Transaksi</th>
            <th>Jenis Transaksi</th>
            <th>Tanggal Transaksi</th>
            <th>Waktu Transaksi</th>
            <th>Nama Pasien</th>
            <th>Jenis Pasien</th>
            <th>Nama Obat</th>
            <th>Dosis Obat</th>
            <th>Jumlah</th>
            <th>Satuan</th>
        </thead>
        <?php
        foreach($query->result_array() as $row){
            ?>
            <tbody>
            <tr>
                <td><?php echo $row['no_transaksi'];?></td>
                <td><?php echo $row['jns_transaksi'];?></td>
                <td><?php echo $row['tgl_transaksi'];?></td>
                <td class="text-center"><?php echo substr($row['waktu_transaksi'],0,8) ;?></td>
                <td><?php echo $row['nama_pasien'];?></td>
                <td><?php echo $row['jns_pasien'];?></td>
                <td><?php echo $row['nama_obat'];?></td>
                <td><?php echo $row['dosis_obat'];?></td>
                <td><?php echo $row['jumlah_obat'];?></td>
                <td><?php echo $row['satuan_obat'];?></td>
            </tr>
            </tbody>
        <?php
        }
        ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</div>