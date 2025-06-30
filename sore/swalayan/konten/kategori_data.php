<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Data Kategori</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">

                <?php 
                    if(isset($_SESSION['alert']['success'])){
                ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_SESSION['alert']['success'] ?>
                        </div>
                <?php
                    }
                ?>

                

                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-sm table-striped">

                        <thead>
                            <tr>
                                <th></th>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                // $dataArray = [
                                //     [
                                //         'id' => 1,
                                //         'nama' => "budi",
                                //     ],
                                //     [
                                //         'id' => 2,
                                //         'nama' => "tika",
                                //     ],
                                // ];

                                $koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore_swalayan');
                                $sql = "SELECT * FROM kategori";
                                $obj = mysqli_query($koneksi, $sql);
                                // $ary = mysqli_fetch_array($obj);
                                $no=1;
                                while ($data = mysqli_fetch_array($obj)) {
                                ?>
                                    <tr>
                                        <th><input type="checkbox" name="delId[]" value="<?= $data['id'] ?>"></th>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $data['nama_kategori'] ?></td>
                                        <td>
                                            <form action="action/kategori_hapus.php" method="post" style="display: inline;">
                                                <button type="submit" name="id" value="<?= $data['id'] ?>" class="btn btn-danger">Hapus</button>
                                            </form>
                                            <a href="app.php?page=kategori_form_edit&id=<?= $data['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                <?php
                                }

                            ?>

                            <!-- ?page=kategori_form_edit -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  -->