<?php 
include "../../assets/helper/koneksi.php";

// /assets/exc/del_kategori.php?id=1
// /assets/exc/del_kategori.php?id=2
$deleteId = $_REQUEST['id'];
$sqlDelete = "DELETE FROM kategori WHERE id=$deleteId";
mysqli_query($koneksi, $sqlDelete);
header('location:../../app.php?modul=data_kategori');