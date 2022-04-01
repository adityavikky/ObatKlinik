<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title">Tambah Kategori Obat</h4>
            <form action="<?php echo base_url('index.php/dashboard/tambah_kategori_aksi')?>" method="POST">
                <div class="form-group">
                    <label for="nama-kategori">Nama Kategori</label>
                    <input type="text" value="" class="form-control" name="kategori_obat" placeholder="Masukkan Nama Obat yang ingin ditambah">
                    <button type="submit" class="btn btn-sm mt-2 btn-primary float-right"><i class="fas fa-save"> Simpan</i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title">Daftar Kategori</h4>
            <div class="container" style="height: 500px; overflow:scroll;">
                <table class="table table-hover">
                    <thead  class="thead-dark text-center">
                        <tr>
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                        $no = 0;
                        foreach($kategori->result_array() as $row){
                            $no ++;
                            ?>

                            <tbody>
                                <tr class="text-center">
                                    <td><?php echo $no;?></td>
                                    <td class="text-left"><?php echo $row['kategori_obat'];?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/dashboard/edit_kategori/'.$row['id_kategori'])?>" class="btn btn-sm btn-info"><i class="fas fa-edit"> Edit</i></a>
                                        <a href="<?php echo base_url('index.php/dashboard/hapus_kategori/'.$row['id_kategori'])?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"> Hapus</i></a>
                                    </td>
                                </tr>
                            </tbody>

                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>