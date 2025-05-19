<!-- start page title -->
<?php 
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM penerbit WHERE id=$id";
    $data = mysqli_query($konek, $sql);
    $ary = mysqli_fetch_array($data);
?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Form Edit Penerbit</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <form method="POST" action="config/penerbit-edit-proses.php">

                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id" value="<?= $ary['id'] ?>" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Penerbit</label>
                        <input type="text" name="nama" value="<?= $ary['nama'] ?>" class="form-control">
                    </div>

                    <div>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>

            </div>
        </div>


    </div>
</div>