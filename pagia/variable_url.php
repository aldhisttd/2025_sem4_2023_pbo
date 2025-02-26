<?php 

// .../variabel_url.php?nama=budi&umur=20

$nama = $_GET['nama'];
echo $nama;
echo $_GET['nama'];

echo $_GET['nama'].$_GET['umur'];

$nama = "budi";
$umur = 20;
echo $nama.$umur;