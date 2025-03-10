<?php 

$variabel_biasa = "Budi";
echo $variabel_biasa;

// ?nama=Budi
echo $_GET['nama']; 
echo $_REQUEST['nama'];

// element name=nama, dari form method POST
echo $_POST['nama'];

session_start();
$_SESSION['nama'] = "Budi";
echo $_SESSION['nama'];