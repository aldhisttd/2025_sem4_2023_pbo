<?php 

$nama_gbr = $_FILES['gbr']['name']; //nama-gambar.JPEG

$extension = strtolower(pathinfo($nama_gbr,PATHINFO_EXTENSION));

$random_nama_gbr = md5(date('m/d/Y h:i:s a', time())).".".$extension;

$folder = "gambar/";


// move_uploaded_file($_FILES["gbr"]["tmp_name"], "foldernya/nama_gambar.jpg");

move_uploaded_file($_FILES["gbr"]["tmp_name"], $folder.$random_nama_gbr);