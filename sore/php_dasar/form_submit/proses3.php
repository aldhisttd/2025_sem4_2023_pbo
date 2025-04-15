<?php
// ambil dulu nama file nya : gambar.jpg
$nama_file = $_FILES['gambar']['name'];
// ambil extension nya : .jpg
$ext = pathinfo($nama_file,PATHINFO_EXTENSION);
// buat string random : bin2hex(random_bytes(16))
$random_name = bin2hex(random_bytes(16));
// gabungkan string random dengan extension
$nama_baru = $random_name.".".$ext;
// upload file nya
move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$nama_baru);
?>

<img src="gambar/<?= $nama_baru ?>" alt="" width="50">

