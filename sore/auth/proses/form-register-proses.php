<?php
if(!isset($_POST['submit'])){
    header('location:../form-register.php');
}

$nickname = $_POST['nickname'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
session_start();

// validasi kosong
if($nickname == ''){
    $_SESSION['er_nickname'] = "Nickname is required !";
}
if($username == ''){
    $_SESSION['er_username'] = "username is required !";
}
if($password1 == ''){
    $_SESSION['er_password1'] = "Password is required !";
}
if($password2 == ''){
    $_SESSION['er_password2'] = "Confirmation password is required !";
}

if(
    $nickname == '' || 
    $username == '' || 
    $password1 == '' || 
    $password2 == ''
){
    header('location:../form-register.php');
    exit();
}

if($password1 != $password2){
    $_SESSION['er_password2'] = "Confirmation password is not match !";
    header('location:../form-register.php');
    exit();
}

$konek = mysqli_connect('localhost', 'root', '', 'pbo_sore');
$sql = "SELECT username FROM members WHERE username='$username'";
$obj = mysqli_query($konek, $sql);
$row = mysqli_num_rows($obj);

if($row != 0){
    $_SESSION['er_username'] = "Username has been taken !";
    header('location:../form-register.php');
    exit();
}

$password = password_hash($password1, PASSWORD_DEFAULT);
$sql = "INSERT INTO members (id, nickname, username, password) VALUES(null, '$nickname', '$username', '$password')";
mysqli_query($konek, $sql);
$_SESSION['ok'] = "Register has been success !";
header('location:../form-register.php');