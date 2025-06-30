<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Buat Data Kategori</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="action/kategori_edit.php" method="post">
                    <?php 
                    $id = $_REQUEST['id'];
                    $koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore_swalayan');
                    $sql = "SELECT nama_kategori FROM kategori WHERE id=$id";
                    $obj = mysqli_query($koneksi, $sql);
                    $ary = mysqli_fetch_array($obj);

                    ?>
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="text" class="form-control" name="namkat" value="<?= $ary['nama_kategori'] ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>