<?php 
// if(!isset($_POST['submit'])){
//     header('location:form.php');
// }

session_start();
$nama = "Budi";
echo $nama;

$_SESSION['nama'] = "Budi";
