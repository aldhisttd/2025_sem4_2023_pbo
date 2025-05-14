<?php 

include "../../assets/helper/koneksi.php";

$nama = $_POST['nama'];
$editId = $_REQUEST['id'];

$sqlEdit = "UPDATE kategori SET nama='$nama' WHERE id=$editId";
mysqli_query($koneksi, $sqlEdit);
header('location:../../app.php?modul=data_kategori');


