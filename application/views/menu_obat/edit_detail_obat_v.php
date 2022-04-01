<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title">Edit Detail Obat</h4>
            <?php foreach($obat as $row){?>
            <form action="<?php echo base_url('index.php/dashboard/obat_update' )?>" method="POST">
                <div class="form-group">
                    <label for="nama-kategori">Nama Obat</label>
                    <input type="text" name="nama_obat" value="<?php echo $row->nama_obat?>" class="form-control">
                    <input type="hidden" name="id_obat" value="<?php echo $row->id_obat?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama-kategori">Dosis Obat</label>
                    <input type="text" name="dosis_obat" value="<?php echo $row->dosis_obat?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama-kategori">Kategori Obat</label>
                    <select name="kategori_obat" id="kategori_obat" class="btn btn-block" required>
                        <option value="">--- Pilih Kategori Obat ---</option>
                        <?php
                            foreach($kategori->result_array() as $row){
                            ?>
                                <option value="<?php echo $row['kategori_obat'];?>"><?php echo $row['kategori_obat'];?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama-kategori">Satuan Obat</label>
                    <select name="satuan_obat" id="satuan_obat" class="btn btn-block">
                        <option value="">--- Pilih Satuan Obat ---</option>
                        <?php
                            foreach($satuan->result_array() as $row){
                            ?>
                                <option value="<?php echo $row['satuan_obat'];?>"><?php echo $row['satuan_obat'];?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"> Simpan</i></button>
            </form>
            <?php }?>
        </div>
    </div>
</div>