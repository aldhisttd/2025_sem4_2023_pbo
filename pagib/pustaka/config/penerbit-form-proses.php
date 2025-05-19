<?php 
if(!isset($_POST['submit'])){
    header('location:../app.php?modul=penerbit-form');
}

// proses form

include "koneksi.php";
$nama = $_POST['nama'];
$sqlCreate = "INSERT INTO penerbit (id, nama) VALUES(null, '$nama')";
mysqli_query($konek, $sqlCreate);

header('location:../app.php?modul=penerbit-form');


// $sqlUpdate = "UPDATE penerbit SET nama='nama_edit' WHERE id=1";
// $sqlDelete = "DELETE FROM penerbit WHERE id=1";