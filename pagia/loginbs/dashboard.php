<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
    exit();
}
?>

<h1>Ini dahsbord</h1>
<a href="proses/proses_logout.php">Logut</a>