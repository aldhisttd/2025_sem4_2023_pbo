<?php 
if(!isset($_POST['login'])){
    header('location:../form.php');
    exit();
}

$userBenar = 'admin';
$passBenar = 'rahasia';

$userForm = $_POST['username'];
$passForm = $_POST['password'];

session_start();

// cek kosong
if($userForm==''){
    $_SESSION['err']['username'] = "Username tidak boleh kosong.";
}
if($passForm==''){
    $_SESSION['err']['password'] = "Password tidak boleh kosong.";
}
if($userForm=='' || $passForm==''){
    header('location:../form.php');
    exit();
}

// cek data login
if($userForm!=$userBenar || $passForm!=$passBenar){
    $_SESSION['err']['login_fail'] = "Data login anda salah.";
    header('location:../form.php');
    exit();
}

$_SESSION['login'] = true;
header('location:../dashboard.php');


