<div class="container mt-5">
    <h3 class="mb-3">Detail Informasi Obat</h3>
    <form action="<?php echo base_url('index.php/Dashboard/save')?>">
        <div class="col">
            <table>
                <tr>
                    <td>Kategori Obat</td>
                    <td class="col-sm-10">
                        <select name="kategori-obat" id="kategori-obat" class="btn btn-block" disabled>
                            <?php
                                $no = 0;
                                foreach($query->result_array() as $row){
                                $no++;
                                ?>
                                    <option class="text-left" value="<?php echo $row['kategori_obat'];?>"><?php echo $row['kategori_obat'];?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Obat</td>
                    <td class="col-sm-10"> 
                        <input type="text" class="form-control" value="<?php foreach( $query->result_array() as $row) echo $row['nama_obat'];?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Dosis Obat</td>
                    <td class="col-sm-10">
                        <input type="text" name="dosis_obat" id="dosis_obat" value="<?php foreach( $query->result_array() as $row) echo $row['dosis_obat'];?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Batch</td>
                    <td class="col-sm-10">
                        <input type="text" name="no_batch" id="do_batch" value="<?php foreach( $query->result_array() as $row) echo $row['no_batch'];?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Satuan Obat</td>
                    <td class="col-sm-10">
                        <select name="satuan-obat" id="satuan-obat" class="btn btn-block" disabled>
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
                        <input type="text" class="form-control" value="<?php foreach( $query->result_array() as $row) echo $row['stok_obat'];?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Expired</td>
                    <td class="col-sm-10">
                        <input type="text" name="tgl_ed" id="tgl_ed" value="<?php foreach( $query->result_array() as $row) echo $row['tgl_ed'];?>" disabled>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <div class="container mt-4">
        <a href="<?php echo base_url('index.php/dashboard/stok_obat');?>">
            <button class="btn btn-danger">Kembali</button>
        </a>
    </div>
</div>