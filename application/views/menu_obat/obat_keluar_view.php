<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#modalInputObat">
    Input Obat
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalInputObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Obat Keluar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nomor Transaksi</label>
                            <input type="text" class="form-control" name="no_transaksi">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pasien</label>
                            <input type="text" class="form-control" name="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Pasien</label>
                            <select name="jns_pasien" id="jns_pasien" class="form-control">
                                <option value="bpjs">BPJS</option>
                                <option value="gigi">Gigi</option>
                                <option value="umum">Umum</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" class="form-control" name="tgl_transaksi" value="<?php echo date('Y-m-d')?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Waktu</label>
                            <input type="text" class="form-control" name="waktu_transaksi" value="<?php ini_set('date.timezone', 'Asia/Jakarta'); echo date("H:i:s")?>" disabled>
                        </div>
                    </div>
                </div>

                <h4  class="mt-4">Resep Obat</h4>
                <table>
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
                                        <select name="nama_obat[]" id="nama_obat" class="form-control">
                                            <option value="">Pilih Nama Obat</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control tambah-form-complete" name="dosis-obat[]" id="dosis-obat" disabled>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control tambah-form-complete" name="jumlah-obat[]" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control tambah-form-complete" name="satu-obat[]" id="satuan-obat" disabled>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </table>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
        </div>
        </div>
    </div>
    </div>
</div>