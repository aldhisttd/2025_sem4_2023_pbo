<?php
if(!isset($_POST['submit'])){
    header('location:../form-login.php');
}

$username = $_POST['username'];
$password = $_POST['password'];
session_start();

// validasi kosong
if($username == ''){
    $_SESSION['er_username'] = "username is required !";
}
if($password == ''){
    $_SESSION['er_password'] = "Password is required !";
}

if(
    $username == '' || 
    $password == ''
){
    header('location:../form-login.php');
    exit();
}

$konek = mysqli_connect('localhost', 'root', '', 'pbo_sore');
$sql = "SELECT * FROM members WHERE username='$username'";
$obj = mysqli_query($konek, $sql);
$row = mysqli_num_rows($obj);

if($row == 0){
    $_SESSION['er_login'] = "Your login data incorect !";
    header('location:../form-login.php');
    exit();
}else{
    $ary = mysqli_fetch_array($obj);
    $pass_hash = $ary['password'];
    if(!password_verify($password, $pass_hash)){
        $_SESSION['er_login'] = "Your login data incorect !";
        header('location:../form-login.php');
        exit();
    }
}

$_SESSION['login'] = true;
$_SESSION['nickname'] = $ary['nickname'];
header('location:../dashboard.php');