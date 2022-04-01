<div class="container">
    <h3 class="text-center mt-4">Master Obat</h3>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Obat</h5>
                    <a href="<?php echo base_url('index.php/dashboard/input_obat');?>" class="btn btn-primary float-right"><i class="fas fa-plus"> Tambah</i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Atur Kategori obat</h5>
                    <a href="<?php echo base_url('index.php/dashboard/tambah_kategori');?>" class="btn btn-primary float-right"><i class="fas fa-edit"> Edit</i></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Atur obat</h5>
                    <a href="<?php echo base_url('index.php/dashboard/atur_obat');?>" class="btn btn-primary float-right"><i class="fas fa-edit"> Edit</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
  <div class="card">
    <div class="card-body">
        <form action="<?php echo base_url('index.php/dashboard/cari_stok_master_obat')?>" class="mt-4 mb-4">
          <table>
            <tr>
              <td><label for="" class="col-form-label mr-2">Nama Obat </label></td>
              <td><input type="text" name="cari_stok_obat" class="form-control form-complete" id="nama-obat" placeholder="Masukkan Nama Obat"></td>
              <td><button type="submit" class="btn btn-primary"><i class="fas fa-search"> Cari</i></button></td>
            </tr>
          </table>
        </form>
        <div class="" style="height: 500px; overflow:scroll;">
          <table class="table table-hover">
            <thead class="thead-dark text-left">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Kategori Obat</th>
                <th scope="col">Dosis Obat</th>
                <th scope="col">Satuan</th>
                <th scope="col">Stok</th>
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
                      <td><?php echo $row['kategori_obat'];?></td>
                      <td><?php echo $row['dosis_obat'];?></td>
                      <td class=""><?php echo $row['satuan_obat'];?></td>
                      <td class="font-weight-bold"><?php echo $row['stok_obat'];?></td>
                      <!-- <td class="text-center">
                        <a href="<?php echo base_url('index.php/dashboard/detail_informasi_obat/');?>">
                          <button class="btn btn-success btn-sm">Detail</button>
                        </a>
                        <a href="<?php echo base_url('index.php/dashboard/edit_obat/');?>">
                          <button class="btn btn-danger btn-sm">Edit</button>
                        </a>
                      </td> -->
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
<script src="<?php echo base_url();?>assets/bootstrap/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/jquery/jquery-ui.js" type="text/javascript"></script>
<script type='text/javascript'>


    $(document).ready(function(){
        
        $(".form-complete").autocomplete({
            source : "<?php echo site_url('dashboard/autofillobat/?')?>",

            select: function(event, ui) {
                $('#nama-obat').val(ui.item.nama_obat);
                $('#id-obat').val(ui.item.id_obat);
                $('#dosis-obat').val(ui.item.dosis_obat);
                $('#satuan-obat').val(ui.item.satuan_obat);
            }
        });
    });
</script>