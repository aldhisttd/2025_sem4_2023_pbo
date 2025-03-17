<?php 
if(!isset($_POST['submit'])){
    header('location:../form_login.php');
}

$userTrue = 'admin';
$passTrue = 'rahasia';

$userForm = $_POST['username'];
$passForm = $_POST['password'];
session_start();

// cek data input kosong atau
if($userForm==''){
    $_SESSION['err']['username'] = "Username tidak boleh kosong";
}
if($passForm==''){
    $_SESSION['err']['password'] = "Password tidak boleh kosong";
}
if($userForm=='' || $passForm==''){
    header('location:../form_login.php');
    exit();
}

// cek data login
if($userForm!=$userTrue || $passForm!=$passTrue){
    $_SESSION['err']['login_fail'] = "Data login tidak valid.";
    header('location:../form_login.php');
    exit();
}


//login success
$_SESSION['login'] = true;
header('location:../dashboard.php');
exit();