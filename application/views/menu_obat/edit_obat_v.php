<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h4>Daftar Obat</h4>
            <div class="" style="height: 600px; overflow:scroll;">
                <table class="table mt-4">
                    <thead class="thead thead-dark">
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Dosis Obat</th>
                        <th>Kategori Obat</th>
                        <th>Satuan Obat</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                            $no = 0;
                            foreach($obat->result_array() as $row){
                                $no ++;
                                ?>
    
                                <tbody>
                                    <tr class="text-center">
                                        <td><?php echo $no;?></td>
                                        <td class="text-left"><?php echo $row['nama_obat'];?></td>
                                        <td class="text-left"><?php echo $row['dosis_obat'];?></td>
                                        <td class="text-left"><?php echo $row['kategori_obat'];?></td>
                                        <td class="text-left"><?php echo $row['satuan_obat'];?></td>
                                        <td>
                                            <a href="<?php echo base_url('index.php/dashboard/edit_obat/'.$row['id_obat'])?>" class="btn btn-sm btn-info"><i class="fas fa-edit"> Edit</i></a>
                                            <a href="<?php echo base_url('index.php/dashboard/hapus_obat/'.$row['id_obat'])?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"> Hapus</i></a>
                                        </td>
                                    </tr>
                                </tbody>
    
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>