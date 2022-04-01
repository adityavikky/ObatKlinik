<div class="container">
    <div class="card w-50 mt-5">
        <div class="card-body">
            <h4 class="mt-4 mb-4 card-title text-center">Tambah Informasi / Jenis Obat</h4>
            <form action="<?php echo base_url('index.php/dashboard/insert_obat');?>" method="POST" class="mt-4">
                <div class="form-group mt-4">
                    <label for="">Kategori Obat</label>
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
                <div class="form-group mt-4">
                    <label for="">Nama Obat</label>
                    <input type="text" class="form-control" name="nama_obat" required>
                </div>
                <div class="form-group mt-4">
                    <label for="">Dosis Obat</label>
                    <input type="text" class="form-control" name="dosis_obat" >
                </div>
                <div class="form-group mt-4">
                    <label for="">Satuan Obat</label>
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
                <div class="form-group mt-4">
                    <button type="reset" class="btn btn-danger btn-block">Reset</button>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"> Simpan</i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    
</script>