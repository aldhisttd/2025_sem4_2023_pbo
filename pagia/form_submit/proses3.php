<?php 

$fileName = $_FILES['photo']['name'];
$ext = ".".pathinfo($fileName,PATHINFO_EXTENSION);
$uniqueFileName = md5(date('Y-m-d-h-i-s')).$ext;
// simpan ke db;

// upload file
move_uploaded_file($_FILES["photo"]["tmp_name"], "gambar/".$uniqueFileName);
