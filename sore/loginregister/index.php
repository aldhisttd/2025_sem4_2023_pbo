<?php 

session_start();

// kalau mau tes login
// $_SESSION['login'] = true; 

if( isset($_SESSION['login']) ){
    header('location:beranda.php');
    exit();
}

header('location:form_login.php');


