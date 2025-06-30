<?php 
$id = $_POST['id'];
$koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore_swalayan');
$sql = "DELETE FROM kategori WHERE id=$id";
mysqli_query($koneksi, $sql);

session_start();
$_SESSION['alert']['success'] = "Data berhasil di hapus.";

header('location:../app.php?page=kategori_data');
?>