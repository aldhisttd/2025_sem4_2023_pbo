<?php 
if(!isset($_POST['submit'])){
    header('location:../form_register.php');
}

// validasi kosong
$nickname = $_POST['nickname']; //Budi
$username = $_POST['username'];
$password = $_POST['password'];

session_start();

$_SESSION['log']['nickname'] = $nickname; //Budi
$_SESSION['log']['username'] = $username;

if($nickname==''){
    $_SESSION['err']['nickname'] = "Nickname is required.";
}
if($username==''){
    $_SESSION['err']['username'] = "username is required.";
}
if($password==''){
    $_SESSION['err']['password'] = "password is required.";
}

    // kalo ada yg kosong balik ke form dan tampilkan pesan error
if($nickname==''||$username==''||$password==''){
    header('location:../form_register.php');
    exit();
}

//  validasi konfirmasi password
    // kalo beda, balik ke form tampilkan pesan error
if($password != $_POST['conf_password']){
    $_SESSION['err']['conf_password'] = "Confirmation password is not same.";
    header('location:../form_register.php');
    exit();
}

    

// validasi username duplikat
$koneksi = mysqli_connect('localhost', 'root', '', 'pbo_pagia');
$sql = "SELECT username FROM user WHERE username='$username'";
$q = mysqli_query($koneksi, $sql);
$jlh_record = mysqli_num_rows($q);

if($jlh_record != 0){
    $_SESSION['err']['username_duplicate'] = "Username has been taken.";
    header('location:../form_register.php');
    exit();
}

$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (nickname, username, password) VALUES('$nickname','$username','$password')";
mysqli_query($koneksi, $sql);
$_SESSION['success'] = "Registration is success.";
unset($_SESSION['log']);
header('location:../form_register.php');

    // kalo ada yang sama, balik ke form dan tampilkan error
// simpan ke database, tampilkan pesan success