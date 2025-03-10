<?php 
$nama_gbr = $_FILES['file']['name']; //nama-gambar.JPEG
$extension = strtolower(pathinfo($nama_gbr,PATHINFO_EXTENSION));
$random_nama_gbr = md5(date('m/d/Y h:i:s a', time())).".".$extension;
$folder = "img/";
move_uploaded_file($_FILES["file"]["tmp_name"], $folder.$random_nama_gbr);

echo "Nama file upload = ". $random_nama_gbr;
echo "<br><br>";
echo "Hobi: ";
echo "<br>";
foreach ($_POST['hobi'] as $key => $value) {
    echo $value;
    echo "<br>";
}

echo "<br>";
echo "Hobi: ";
echo "<br>";
echo $_POST['jadwal'];

