<?php 

session_start();
if(isset($_SESSION['is_login'])){
    header('location:dashboard.php');
    exit();
}

header('location:login.php');


