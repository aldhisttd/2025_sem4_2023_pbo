<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Form Penerbit Baru</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sqlSelect = "SELECT * FROM penerbit";
                            $data = mysqli_query($konek, $sqlSelect);
                            $no=1;
                            while($ary = mysqli_fetch_array($data)){
                        ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $ary['nama'] ?></td>
                                    <td>
                                        <form action="config/penerbit-hapus.php" method="post">
                                            <input type="hidden" name="id" value="<?= $ary['id'] ?>">
                                            <button type="submit" name="hapus" class="btn btn-danger btn-sm">Hapus</button>
                                            <a href="?modul=penerbit-edit&&id=<?= $ary['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>


    </div>
</div>