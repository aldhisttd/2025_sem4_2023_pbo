<?php 
if(!isset($_POST['submit'])){
    header('location:../login.php');
}

$userForm = $_POST['username'];
$passForm = $_POST['password'];
session_start();

// cek data input kosong atau
if($userForm==''){
    $_SESSION['err']['username'] = "Username is required.";
}
if($passForm==''){
    $_SESSION['err']['password'] = "Password is required.";
}
if($userForm=='' || $passForm==''){
    header('location:../login.php');
    exit();
}

// koneksi

include "koneksi.php";
$sql = "SELECT * FROM `user` WHERE username='$userForm'";
$hasil = mysqli_query($koneksi, $sql);
$row = mysqli_num_rows($hasil);

if($row==0){
    $_SESSION['err']['login_fail'] = "Data login tidak valid.";
    header('location:../login.php');
    exit();
}

$data = mysqli_fetch_array($hasil);
$passDb = $data['password'];
$nama = $data['fullname'];
if(!password_verify($passForm, $passDb)){
    $_SESSION['err']['login_fail'] = "Data login tidak valid.";
    header('location:../login.php');
    exit();
}

//login success
$_SESSION['is_login'] = true;
$_SESSION['nama'] = $nama;
header('location:../dashboard.php');
exit();