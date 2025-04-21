<?php 

if(!isset($_POST['submit'])){
    header('location:../register.php');
}

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$pass_confirm = $_POST['pass_confirm'];

session_start();

$_SESSION['log']['fullname'] = $fullname;
$_SESSION['log']['username'] = $username;



if($fullname==''){
    $_SESSION['err']['fullname'] = "Fullname is required.";
}
if($username==''){
    $_SESSION['err']['username'] = "Username is required.";
}
if($pass==''){
    $_SESSION['err']['pass'] = "Password is required.";
}

if(
    $fullname=='' || 
    $username=='' || 
    $pass==''
){
    header('location:../register.php');
    exit();
}



if($pass != $pass_confirm){
    $_SESSION['err']['pass_fail'] = "Password confirmation is not same.";
    header('location:../register.php');
    exit();
}

include "koneksi.php";

$sql = "SELECT username FROM user WHERE username='$username'";
$q = mysqli_query($koneksi, $sql);
$row = mysqli_num_rows($q);

if($row==1){
    $_SESSION['err']['username'] = "Username has been taken.";
    header('location:../register.php');
    exit();
}

unset($_SESSION['log']);

$pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO user (fullname, username, password) VALUES('$fullname', '$username', '$pass')";
mysqli_query($koneksi, $sql);
$_SESSION['success'] = "Register has been success.";
header('location:../register.php');




