<?php 
if(!isset($_POST['hapus'])){
    header('location:../app.php?modul=penerbit-data');
}

include "koneksi.php";
$id = $_POST['id'];
$sqlDelete = "DELETE FROM penerbit WHERE id=$id";
mysqli_query($konek, $sqlDelete);
header('location:../app.php?modul=penerbit-data');


