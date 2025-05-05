<?php 

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
    header('location:../form_login.php');
    exit();
}


// Cek data login ada atau tidak di tabel members
$koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore');
$sql = "SELECT * FROM members WHERE username='$username'";
$hasil_query = mysqli_query($koneksi, $sql);
$row = mysqli_num_rows($hasil_query);

if($row == 0){
    $_SESSION['error']['login'] = "Data login tidak ditemukan";
    header('location:../form_login.php');
    exit();
}

$data = mysqli_fetch_array($hasil_query);
$passDB = $data['password'];

if(!password_verify($password, $passDB)){
    $_SESSION['error']['login'] = "Data login tidak ditemukan";
    header('location:../form_login.php');
    exit();
}

$_SESSION['login'] = "oke";
$_SESSION['nama'] = $data['nickname'];
$_SESSION['role'] = $data['role'];
header('location:../beranda.php');


// $hasil_query = mysqli_query($koneksi, $sql);
// $row = mysqli_num_rows($hasil_query);











// kalau username dan password ada yang cocok di tabel member
$_SESSION['login'] = "ok";










// header('location:../beranda.php');






// validasi username sama
    // jika username sudah ada maka alert balik form register

// $koneksi = mysqli_connect('localhost', 'root', '', 'pbo_sore');
// $sql = "SELECT * FROM members WHERE username='$username'";
// $hasil_query = mysqli_query($koneksi, $sql);
// $jlh_row = mysqli_num_rows($hasil_query);

// if($jlh_row > 0){
//     $_SESSION['error']['duplicate'] = "Username yang sama sudah ada, silahkan ganti.";
//     header('location:../form_register.php');
//     exit();
// }

// tambahkan ke database
// $password = password_hash($password, PASSWORD_DEFAULT);
// $password = md5($password);
// $sql = "INSERT INTO members (nickname, username, password, role) VALUES('$nickname','$username','$password','$role')";
// mysqli_query($koneksi, $sql); 
// $_SESSION['success'] = "Proses register berhasil, anda sudah bisa login";
// header('location:../form_register.php');