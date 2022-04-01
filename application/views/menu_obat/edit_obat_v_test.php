<div class="container">
    <h4 class="mt-4">Edit Jenis Obat / Kategori Obat</h4>
    <form action="" class="mt-4 col-sm-5">
        <div class="form-group mt-4">
            <label for="">Kategori Obat</label>
            <select name="kategori-obat" id="kategori-obat" class="btn btn-block text-left">
                <option value="">--- Pilih Kategori Obat ---</option>
                <?php
                    $no = 0;
                    foreach($kategori->result_array() as $row){
                    $no++;
                    ?>
                        <option value="<?php echo $row['kategori_obat'];?>"><?php echo $row['kategori_obat'];?></option>
                    <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="">Nama Obat</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group mt-4">
            <label for="">Dosis Obat</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group mt-4">
            <label for="">Satuan Obat</label>
            <select name="satuan-obat" id="satuan-obat" class="btn btn-block text-left">
                <option value="">--- Pilih Satuan Obat ---</option>
                <?php
                    $no = 0;
                    foreach($satuan->result_array() as $row){
                    $no++;
                    ?>
                        <option value="<?php echo $row['satuan_obat'];?>"><?php echo $row['satuan_obat'];?></option>
                    <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group mt-4">
            <button type="reset" class="btn btn-danger btn-block">Reset</button>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </div>
    </form>
</div>


<div class="container mt-5">
    <h3 class="mb-3">Edit Jenis / Kategori Obat</h3>
    <form action="<?php echo base_url('index.php/Dashboard/save')?>">
        <div class="col">
            <table>
                <tr>
                    <td>Kategori Obat</td>
                    <td class="col-sm-10">
                        <select name="kategori-obat" id="kategori-obat" class="btn btn-block">
                            <?php
                                $no = 0;
                                foreach($query->result_array() as $row){
                                $no++;
                                ?>
                                <?php foreach ($kategori->result_array() as $row) {
                                    ?>
                                        <option class="text-left" value="<?php echo $row['kategori_obat'];?>"><?php echo $row['kategori_obat'];?></option>
                                    <?php
                                }?>
                                <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Obat</td>
                    <td class="col-sm-10"> 
                        <input type="text" class="form-control" value="<?php foreach( $query->result_array() as $row) echo $row['nama_obat'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Satuan Obat</td>
                    <td class="col-sm-10">
                        <select name="satuan-obat" id="satuan-obat" class="btn btn-block">
                            <?php
                                $no = 0;
                                foreach($satuan->result_array() as $row){
                                $no++;
                                ?>
                                    <option class="text-left" value="<?php echo $row['satuan_obat'];?>"><?php echo $row['satuan_obat'];?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stok Obat</td>
                    <td class="col-sm-10">
                        <input type="text" class="form-control" value="<?php foreach( $query->result_array() as $row) echo $row['stok_obat'];?>">
                    </td>
                </tr>
            </table>
        </div>
        <div class="container mt-4">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
</div>