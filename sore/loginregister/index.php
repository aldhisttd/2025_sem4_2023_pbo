<?php 

session_start();

if( isset($_SESSION['login']) ){
    header('location:beranda.php');
    exit();
}

header('location:form_login.php');


