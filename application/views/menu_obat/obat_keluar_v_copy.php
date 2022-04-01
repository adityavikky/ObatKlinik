<div class="container">
    <h3 class="mt-4">Form Input Obat Keluar</h3>
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
                        <label for="text">Nama Pasien</label>
                    </td>
                    <td>
                        <input class="ml-4 form-control" type="text" name="nama_vendor" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="text">Jenis Pasien</label>
                    </td>
                    <td>
                        <select class="ml-4 form-control" name="jenis-pasien" id="jenis-pasien">
                            <option value="">--------- Pilih Jenis Pasien ---------</option>
                            <option value="bpjs">BPJS</option>
                            <option value="gigi">Gigi</option>
                            <option value="umum">Umum</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>

        <div class="">
            <h3>Resep Obat</h3>
            <button type="button" id="btn-tambah-form" class="btn btn-info">Tambah Data Form</button>
            <button type="button" id="btn-reset-form" class="btn btn-danger">Reset Form</button>
            <form action="">
                <div class="form-group mt-4">
                    <table class="table">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Dosis Obat</th>
                                <th scope="col">Jumlah Obat</th>
                                <th scope="col">Satuan Obat</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                                <td>
                                    <input type="text" name="nama_obat[]" id="nama-obat" class="form-control" >
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="dosis-obat[]" id="dosis-obat" disabled>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="jumlah-obat[]" >
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="satu-obat[]" id="satuan-obat" disabled>
                                </td>
                            </tr>
                        </tbody>
                        <tbody id="insert-form">

                        </tbody>
                        <!-- <tbody id="insert-form">
            
                        </tbody> -->
                    </table>
                </div>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </form>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="obat-item">
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
                    <table class="table">
                        <thead class="thead-dark">
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Dosis Obat</th>
                            <th scope="col">Jumlah Obat</th>
                            <th scope="col">Satuan Obat</th>
                        </thead>
                        <tbody>
                            <td>
                                <input type="text" name="nama-obat[]" id="nama-obat" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="dosis_obat[]" id="dosis_obat" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="jml_obat[]" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="satu_obat[]" id="satuan_obat" class="form-control">
                            </td>
                        </tbody>
                    </table>
                </form>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    
</div> -->
<script src="<?php echo base_url();?>assets/jquery/jquery-ui.js" type="text/javascript"></script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('#nama-obat').autocomplete({
            source : "<?php echo site_url('dashboard/autofillobat/?')?>",
            // select : showResult,
            // focus : showResult,
            // change : showResult
            select: function(event, ui) {
                alert(ui.item.nama_obat);
                $('#nama-obat').val(ui.item.nama_obat);
                $('#dosis-obat').val(ui.item.dosis_obat);
                $('#satuan-obat').val(ui.item.satuan_obat);
            //     return false;
            }
        });

        // function showResult(event,ui){
        //     $('#nama-obat').text(ui.item.nama_obat);
        //     $('#dosis-obat').text(ui.item.dosis_obat);
        //     $('#satuan-obat').text(ui.item.satuan_obat);
        // }
    });


    $(document).ready(function(){ // Ketika halaman sudah diload dan siap
        $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
            var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
            var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
            
            // Kita akan menambahkan form dengan menggunakan append
            // pada sebuah tag div yg kita beri id insert-form
            $("#insert-form").append(nextform+
            "<tr>"+
                "<td>"+
                    "<input type='text' name='nama_obat[]' id='nama-obat' class='form-control'>"+
                "</td>"+
                "<td>"+
                    "<input type='text' class='form-control' name='dosis-obat[]' id='dosis-obat' disabled>"+
                "</td>"+
                "<td>"+
                    "<input type='text' class='form-control' name='jumlah-obat[]'>"+
                "</td>"+
                "<td>"+
                    "<input type='text' class='form-control' name='satu-obat[]' id='satuan-obat' disabled>"+
                "</td>"+
            "</tr>");
            
            $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
            });
            
            // Buat fungsi untuk mereset form ke semula
            $("#btn-reset-form").click(function(){
            $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
            $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
            });
        });
</script>