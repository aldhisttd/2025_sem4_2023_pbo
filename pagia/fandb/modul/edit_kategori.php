<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Edit Kategori Menu</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?php 
                    $editId = $_REQUEST['id'];
                    $sqlSelectId = "SELECT * FROM kategori WHERE id=$editId";
                    $obj = mysqli_query($koneksi, $sqlSelectId);
                    $ary = mysqli_fetch_array($obj);
                ?>
                
                <form action="assets/exc/exc_edit_kategori.php?id=<?= $ary['id'] ?>" method="post">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" value="<?= $ary['nama'] ?>" name="nama" class="form-control form-control-lg">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>