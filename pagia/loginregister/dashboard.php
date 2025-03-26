<?php
session_start();
if (!isset($_SESSION['isLogin'])) {
    header('location:form_login.php');
    exit();
}
?>

<h1>Selamat datang di dashboard, <?= $_SESSION['nickname'] ?></h1>

<a href="proses/proses_logout.php">Logout</a>