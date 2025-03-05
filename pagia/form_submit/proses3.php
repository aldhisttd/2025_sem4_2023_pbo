<?php 

$fileName = $_FILES['photo']['name'];
$ext = ".".pathinfo($fileName,PATHINFO_EXTENSION);
$uniqueFileName = md5(date('Y-m-d-h-i-s')).$ext;
// simpan ke db;

// upload file
move_uploaded_file($_FILES["photo"]["tmp_name"], "gambar/".$uniqueFileName);




// echo md5("2025-03-05-12-00-11").".jpeg";
// ambil/tentukan nama file/gambar, jpg
// 2025-03-05-12-00-12.jpg
// md()

// simpan file nya di project sama