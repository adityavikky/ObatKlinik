<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h3>Form Input Obat Masuk</h3>
            <div class="form">
                <div class="">
                    <form action="<?php echo base_url('index.php/obat/insert_obat_masuk');?>" method="POST">
                        <div class="form-group mt-4">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">Nomor Transaksi</label>
                                        <input class="form-control" type="text" value="" name="no_transaksi" placeholder="Masukkan Nomor Transaksi" required>
                                        <input class="form-control" type="text" value="Masuk" name="jns_transaksi" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Nomor Faktur</label>
                                        <input class="form-control" type="text" value="" name="no_faktur" placeholder="Masukkan Nomor Faktur" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Nomor Batch</label>
                                        <input class="form-control" type="text" value="" name="no_batch" placeholder="Masukkan Nomor Batch" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">Tanggal</label>
                                        <input class="form-control" type="text" value="<?php ini_set('date.timezone', 'Asia/Jakarta'); echo date('Y-m-d')?>" name="tgl_transaksi" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Waktu</label>
                                        <input class="form-control" type="text" value="<?php ini_set('date.timezone', 'Asia/Jakarta'); echo date("H:i:s")?>" name="waktu_transaksi" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Nama Vendor</label>
                                        <input class="form-control" type="text" name="nama_vendor" placeholder="Masukkan Nama Vendor" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Tambah Obat</h3>
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
                                            <input type="text" class="form-control tambah-form-complete" name="nama_obat" id="nama-obat"  >
                                            <input type="text" class="form-control tambah-form-complete" name="id_obat" id="id-obat" hidden>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control tambah-form-complete" name="dosis_obat" id="dosis-obat" readonly>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control tambah-form-complete" name="jumlah_obat" >
                                        </td>
                                        <td>
                                            <input type="text" class="form-control tambah-form-complete" name="satuan_obat" id="satuan-obat" readonly>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody id="insert-form">
        
                                </tbody>
                                <!-- <tbody id="insert-form">
                    
                                </tbody> -->
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"> Simpan </i></button>
                    </form>
                </div>
            </div>
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
                                <input type="text" name="nama-obat[]" id="nama-obat" class="form-control tambah-form-complete">
                            </td>
                            <td>
                                <input type="text" name="dosis_obat[]" id="dosis_obat" class="form-control tambah-form-complete">
                            </td>
                            <td>
                                <input type="text" name="jml_obat[]" class="form-control tambah-form-complete">
                            </td>
                            <td>
                                <input type="text" name="satu_obat[]" id="satuan_obat" class="form-control tambah-form-complete">
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


<!-- Script JS Bootstrap -->

<!-- Script Offline -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<!-- Script Online -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


<!-- SweetAlert2 -->
<script src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js');?>"></script>
<!--  -->
<script src="<?php echo base_url();?>assets/bootstrap/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/jquery/jquery-ui.js" type="text/javascript"></script>
<script type='text/javascript'>


    $(document).ready(function(){
        
        $(".tambah-form-complete").autocomplete({
            source : "<?php echo site_url('dashboard/autofillobat/?')?>",
            
            // select : showResult,
            // focus : showResult,
            // change : showResult
            select: function(event, ui) {
                // alert(ui.item.nama_obat);
                $('#nama-obat').val(ui.item.nama_obat);
                $('#id-obat').val(ui.item.id_obat);
                $('#dosis-obat').val(ui.item.dosis_obat);
                $('#satuan-obat').val(ui.item.satuan_obat);
            //     return false;
            }
        });

        // $('nama_obat').autocomplete({
        //     source: function(request,response){
        //         // fetch data
        //         $.ajax({
        //             url: '<?php base_url('index.php/dashboard/obatList')?>',
        //             type: 'post',
        //             dataType: 'json',
        //             data: {
        //                 search: request.term
        //             },
        //             success:function(data){
        //                 response(data);
        //             }
        //         });
        //     },
        //     select: function(event, ui){
        //         $('nama-obat').val(ui.item.nama_obat);
        //         $('satuan-obat').val(ui.item.satuan_obat);
        //         $('dosis-obat').val(ui.item.dosis_obat);

        //         return false;
        //     }
        // })

        // function OnSelect(event, ui){
        //     var item = ui.item;
        //     var itemnambat = item.nama_obat;
        //     var itemdosis = item.dosis_obat;
        //     var itemsatbat = item.satuan_obat;

        //     $("#nama-obat").val(itemnambat);
        //     $("#dosis-obat").val(itemdosis);
        //     $("#satuan-obat").val(itemsatbat);
        // }

        // function showResult(event,ui){
        //     $('#nama-obat').text(ui.item.nama_obat);
        //     $('#dosis-obat').text(ui.item.dosis_obat);
        //     $('#satuan-obat').text(ui.item.satuan_obat);
        // }
    });


    // $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    //     $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
    //         var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
    //         var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

    //         var formjumlah = parseInt($("#dosis-obat").val())
            
    //         // Kita akan menambahkan form dengan menggunakan append
    //         // pada sebuah tag div yg kita beri id insert-form
    //         $("#insert-form").append(nextform+
    //         "<tr>"+
    //             "<td>"+
    //                 "<input type='text' name='nama_obat[]' id='nama-obat' class='form-control tambah-form-complete'>"+
    //             "</td>"+
    //             "<td>"+
    //                 "<input type='text' class='form-control tambah-form-complete' name='dosis-obat[]' id='dosis-obat' disabled>"+
    //             "</td>"+
    //             "<td>"+
    //                 "<input type='text' class='form-control tambah-form-complete' name='jumlah-obat[]'>"+
    //             "</td>"+
    //             "<td>"+
    //                 "<input type='text' class='form-control tambah-form-complete' name='satu-obat[]' id='satuan-obat' disabled>"+
    //             "</td>"+
    //         "</tr>");

    //         $(".tambah-form-complete").autocomplete({
    //             source : "<?php echo site_url('dashboard/autofillobat/?')?>",
                
    //             select: function(event, ui) {
    //                 $('#nama-obat').val(ui.item.nama_obat);
    //                 $('#dosis-obat').val(ui.item.dosis_obat);
    //                 $('#satuan-obat').val(ui.item.satuan_obat);
    //             }
    //         });
            
    //         $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    //         });

    //         // Autocomplete in append


            
    //         // Buat fungsi untuk mereset form ke semula
    //         $("#btn-reset-form").click(function(){
    //         $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
    //         $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    //         });
    //     });
</script>

<!-- <script>
    const simpan = document.querySelector('#simpan');
    simpan.addEventListener('click', function(){
        Swal({
            title: 'Sukses',
            text: 'Data Berhasil di Input',
            type: 'success'
        });
    });
</script> -->