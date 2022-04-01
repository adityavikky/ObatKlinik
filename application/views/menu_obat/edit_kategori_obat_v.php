<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title">Edit Kategori Obat</h4>
            <?php foreach($kategori_obat as $row){?>
            <form action="<?php echo base_url('index.php/dashboard/update_kategori' )?>" method="POST">
                <div class="form-group">
                    <label for="nama-kategori">Nama Kategori Lama</label>
                    <input type="text" name="" value="<?php echo $row->kategori_obat?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama-kategori">Nama Kategori Baru</label>
                    <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori?>" class="form-control">
                    <input type="text" name="kategori_obat" value="<?php echo $row->kategori_obat?>" class="form-control">
                    <button class="btn btn-primary float-right"><i class="fas fa-save"> Simpan</i></button>
                </div>
            </form>
            <?php }?>
        </div>
    </div>
</div>