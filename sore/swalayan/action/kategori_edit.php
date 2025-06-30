<?php 
$nama = $_POST['namkat'];
$id = $_POST['id'];
$koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore_swalayan');
$sql = "UPDATE kategori SET nama_kategori='$nama' WHERE id=$id";
mysqli_query($koneksi, $sql);
session_start();
$_SESSION['alert']['success'] = "Data berhasil di ubah.";
header('location:../app.php?page=kategori_data');
?>