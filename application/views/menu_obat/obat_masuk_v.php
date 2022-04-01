<div class="container">
    <h3 class="mt-4">Form Input Obat Masuk</h3>
    <div class="form">
        <div class="form-group mt-4">
            <table class="table">
                <tr>
                    <td>
                        <label for="text">Nomor Transaksi</label>
                    </td>
                    <td>
                        <input class="ml-4 form-control" type="text" value="" name="no_transaksir" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="text">Tanggal</label>
                    </td>
                    <td>
                        <input class="ml-4 form-control" type="text" value="<?php echo date('d-m-y')?>" name="tgl_keluar" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="text">Waktu</label>
                    </td>
                    <td>
                        <input class="ml-4 form-control" type="text" value="<?php ini_set('date.timezone', 'Asia/Jakarta'); echo date("H:i:s")?>" name="waktu_keluar" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="text">Nama Vendor</label>
                    </td>
                    <td>
                        <input class="ml-4 form-control" type="text" name="nama_vendor" required>
                    </td>
                </tr>
            </table>
        </div>

        <div class="">
            <h3>Obat Masuk</h3>
            <button type="button" class="btn btn-info mt-4" data-toggle="modal" data-target="#obat-item">Cari Obat</button>
            <form action="">
                <div class="form-group mt-4">
                    <table class="table">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Obat</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Jumlah Obat</th>
                                <th scope="col">Dosis Obat</th>
                                <th scope="col">Satuan Obat</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                                <td>
                                    <input type="text" class="form-control" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled>
                                </td>
                            </tr>
                        </tbody>
                        <tbody id="insert-form">
            
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="obat-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pilih Obat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Nama obat</label>
                        <input type="text" name="nama-obat" id="nama-obat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Dosis obat</label>
                        <input type="text" id="dosis-obat" class="form-control" value="<?php echo base_url('index.php/dashboard/getdatanamaobat');?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Satuan obat</label>
                        <input type="text" id="satuan-obat" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah obat</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        $(document).ready(function(){
            loadnamaobat();
        });

        function loadnamaobat(){
            $("#kategori-obat").change(function(){
                var getkategoriobat = $("#kategori-obat").val();
                $.ajax({
                    type : "POST",
                    dataType : "JSON",
                    url : "<?php 
                    // echo base_url('index.php/dashboard/getdatanamaobat');
                    ?>",
                    data : {katobat : getkategoriobat},
                    success : function(data){
                        console.log(data);

                        var html = "";
                        var i;
                        for (i = 0; i < data.length; i++){
                            html += '<option value="'+data[i].nama_obat+'">'+data[i].nama_obat+'</option>';
                        };
                        $("#nama-obat").html(html);
                        $("nama-obat").change(function(){
                            var getnamaobat = $("#nama-obat").val();
                            console.log(data[getnamaobat]);
                        })
                    }
                });
            });
        };
    </script> -->
</div>
<script src="<?php echo base_url();?>assets/jquery/jquery-ui.js" type="text/javascript"></script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('#nama-obat').autocomplete({
            source : "<?php echo site_url('dashboard/autofillobat/?')?>",
            select: function(event, ui) {
                $('[name="nama_obat"]').val(ui.item.nama_obat);
                $('[name="dosis_obat"]').val(ui.item.dosis_obat);
                $('[name="satuan_obat"]').val(ui.item.satuan_obat);
            }
        });
    });
</script>