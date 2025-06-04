<?php

if(!isset($_POST['submit'])){
    header('location:../form-login.php');
    exit();
}

// ambil semua data dari form
$username = $_POST['username'];
$password = $_POST['password'];


// validasi data kosong
    // jika ada yg kosong maka kasi alert balik form register
session_start();
if($username == ''){
    $_SESSION['error']['username'] = "Username tidak boleh kosong";
}
if($password == ''){
    $_SESSION['error']['password'] = "Password tidak boleh kosong";
}

if($username == '' || $password == ''){
    header('location:../form-login.php');
    exit();
}


// Cek data login ada atau tidak di tabel members
include "koneksi.php";
$sql = "SELECT * FROM user WHERE username='$username'";
$hasil_query = mysqli_query($konek, $sql);
$row = mysqli_num_rows($hasil_query);

if($row == 0){
    $_SESSION['error']['login'] = "Data login tidak ditemukan";
    header('location:../form-login.php');
    exit();
}

$data = mysqli_fetch_array($hasil_query);
$passDB = $data['password'];

if(!password_verify($password, $passDB)){
    $_SESSION['error']['login'] = "Data login tidak ditemukan";
    header('location:../form-login.php');
    exit();
}

$_SESSION['login'] = "oke";
$_SESSION['username'] = $data['username'];
$_SESSION['role'] = $data['role'];
header('location:../app.php?modul=dashboard');