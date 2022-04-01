<div class="container">
  <div class="card mt-4">
    <div class="card-body">
      <h4>Laporan Obat Keluar</h4>
      <table>
        <tr>
            <form action="<?php echo base_url('index.php/dashboard/filter_daftar_keluar')?>" class="mt-4">
              <td><label for="" class="col-form-label mr-2">Filter Tanggal </label></td>
              <td><input type="date" name="mulaitgl" class="form-control" placeholder="Dari Tanggal"></td>
              <td>-</td>
              <td><input type="date" name="sampaitgl" class="form-control" placeholder="Sampai Tanggal"></td>
              <td><button type="submit" class="btn btn-primary"><i class="fas fa-filter">Filter</i></button></td>
            </form>
            
            <form action="<?php echo base_url('index.php/obat/print_daftar_obat_keluar');?>">
              <td>
                <input type="text" name="mulaitgl" value="<?php echo $mulaitgl;?>" hidden>
                <input type="text" name="sampaitgl" value="<?php echo $sampaitgl;?>" hidden>
                <button class="btn btn-danger" type="submit"><i class="fas fa-print"> Print </i></button>
              </td>
            </form>

            <form action="<?php echo base_url('index.php/dashboard/filter_daftar_keluar_hariini')?>">
              <td>
                <input class="form-control" type="text" value="<?php ini_set('date.timezone', 'Asia/Jakarta'); echo date('Y-m-d')?>" name="hariini" hidden>
              </td>
              <td>
                <button class="btn btn-info" type="submit"><i class="fas fa-search"> Hari Ini</i></button>
              </td>
            </form>

            <form action="<?php echo base_url('index.php/dashboard/filter_daftar_keluar_bulanini')?>">
              <td>
                <input class="form-control" type="text" value="<?php ini_set('date.timezone', 'Asia/Jakarta'); echo date('Y-m')?>" name="bulanini" hidden>
              </td>
              <td>
                <button class="btn btn-success" type="submit"><i class="fas fa-search"> Bulan Ini</i></button>
              </td>
            </form>

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
    </div>
  </div>
</div>
