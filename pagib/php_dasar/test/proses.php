<?php 

$warna = $_POST['warna'];
$harga = $_POST['harga']*2;
$keterangan = $_POST['keterangan'];

echo "Mobil dengan warna ".$warna." harganya Rp ".$harga;
echo "<br>";
echo $keterangan;

?>