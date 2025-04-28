<?php 

// ambil semua data dari form
$nickname = $_POST['nickname'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$role = $_POST['role'];

// validasi data kosong
    // jika ada yg kosong maka kasi alert balik form register
session_start();
if($nickname == ''){
    $_SESSION['error_nickname'] = "Nickname tidak boleh kosong";
}
if($username == ''){
    $_SESSION['error']['username'] = "Username tidak boleh kosong";
}
if($password == ''){
    $_SESSION['error']['password'] = "Password tidak boleh kosong";
}

if($nickname == '' || $username == '' || $password == ''){
    header('location:../form_register.php');
    exit();
}

// validasi konfirmasi password
    // jika berbeda, alert, balik ke form register
if($password != $password2){
    $_SESSION['error']['password2'] = "Password konfirmasi tidak sama";
    header('location:../form_register.php');
    exit();
}

// validasi username sama
    // jika username sudah ada maka alert balik form register

$koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore');
$sql = "SELECT * FROM members WHERE username='$username'";
$hasil_query = mysqli_query($koneksi, $sql);
$jlh_row = mysqli_num_rows($hasil_query);

if($jlh_row > 0){
    $_SESSION['error']['duplicate'] = "Username yang sama sudah ada, silahkan ganti.";
    header('location:../form_register.php');
    exit();
}

// tambahkan ke database
$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO members (nickname, username, password, role) VALUES('$nickname','$username','$password','$role')";
mysqli_query($koneksi, $sql); 
$_SESSION['success'] = "Proses register berhasil, anda sudah bisa login";
header('location:../form_register.php');