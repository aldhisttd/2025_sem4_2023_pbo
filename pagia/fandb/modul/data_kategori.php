<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Data Kategori Menu</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sqlSelectAll = "SELECT * FROM kategori";
                            $obj = mysqli_query($koneksi, $sqlSelectAll);
                            $no = 1;
                            while ($ary = mysqli_fetch_array($obj)) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $ary['nama'] ?></td>
                                    <td>
                                        <a onclick="return confirm('Anda yakin menghapus data ini????')" href="assets/exc/del_kategori.php?id=<?= $ary['id'] ?>">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a style="margin-left: 10px;" href="?modul=edit_kategori&id=<?= $ary['id'] ?>" >
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                        ?>
                        
                        
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>