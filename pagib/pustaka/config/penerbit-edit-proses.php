<?php 
if(!isset($_POST['submit'])){
    header('location:../app.php?modul=penerbit-data');
}

// proses form

include "koneksi.php";
$nama = $_POST['nama'];
$id = $_POST['id'];
$sqlCreate = "UPDATE penerbit SET nama='$nama' WHERE id=$id";
mysqli_query($konek, $sqlCreate);

header('location:../app.php?modul=penerbit-data');

