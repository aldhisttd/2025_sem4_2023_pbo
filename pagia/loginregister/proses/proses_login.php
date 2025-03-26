<?php 
if(!isset($_POST['login'])){
    header('location:../form_login.php');
    exit();
}

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
    header('location:../form_login.php');
    exit();
}

// cek data login

// password_verify($password, $hashed_password);

$koneksi = mysqli_connect('localhost', 'root', '', 'pbo_pagia');
$sql = "SELECT * FROM user WHERE username='$userForm'";
$q = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($q)>0){
    $data = mysqli_fetch_array($q);
    $hashed_password = $data['password'];
    $nickname = $data['nickname'];
    if(!password_verify($passForm, $hashed_password)){
        $_SESSION['err']['login_fail'] = "Data login anda salah.";
        header('location:../form_login.php');
        exit();
    }
}else{
    $_SESSION['err']['login_fail'] = "Data login anda salah.";
    header('location:../form_login.php');
    exit();
}

$_SESSION['isLogin'] = $userForm;
$_SESSION['nickname'] = $nickname;

header('location:../dashboard.php');


