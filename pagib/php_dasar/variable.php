<?php 

// $nama_variabel
// $namaVariabel

$nama = "Budi";

echo $nama;

echo "nama";

echo "$nama"; //jangan

$alamat = "Dumai";

echo "Nama saya ".$nama.", Umur 20 tahun";

echo $nama."-".$alamat;

$qty = 5;
$harga = 10000;
echo "<br>";
echo "Rp ".$qty*$harga;

echo "<br>";
$qty = 5;
$harga = "10000";
echo "Rp ".$qty*$harga;

$bg = "green";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $bg ?>;" >
    <br>
    ini body
</body>
</html>