<?php 
$nama = $_POST['namkat'];
$koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore_swalayan');
$sql = "INSERT INTO kategori (id, nama_kategori) VALUES(null, '$nama')";
mysqli_query($koneksi, $sql);
session_start();
$_SESSION['alert']['success'] = "Data baru berhasil di buat.";
header('location:../app.php?page=kategori_data');
?>