<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:form-login.php');
}

?>

<h1>Selamat <?= $_SESSION['nickname'] ?> Datang di Dashboard</h1>
<a href="proses/logout.php">logout</a>