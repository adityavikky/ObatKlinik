<div class="container mt-5">
    <h3 class="text-center mb-4">Rekap Stok Obat Klinik Pratama Rahmat Medika</h3>
    <table class="table">
      <thead class="thead-dark text-center">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama Obat</th>
          <th scope="col">Dosis Obat</th>
          <th scope="col">Satuan</th>
          <th scope="col">Stok Awal</th>
          <th scope="col">BPJS</th>
          <th scope="col">Gigi</th>
          <th scope="col">Umum</th>
          <th scope="col">Jumlah Masuk</th>
          <th scope="col">Jumlah Stok Akhir</th>
          <th scope="col">Satuan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>

      <?php
        $no = 0;
        foreach($query->result_array() as $row){
          $no++;

          ?>
          <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $row['nama_obat'];?></td>
                <td><?php echo $row['dosis_obat'];?></td>
                <td><?php echo $row['satuan_obat'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $row['satuan_obat'];?></td>
                <td class="text-center">
                  <a href="">
                    <button class="btn btn-success btn-sm">Detail</button>
                  </a>
                </td>
            </tr>
          </tbody>
        <?php
        }
      ?>
    </table>
</div>