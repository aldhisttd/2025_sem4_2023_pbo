<?php 
session_start();
if( isset($_SESSION['login']) ){
    header('location:index.php');
    exit();
}
?>
form login

<a href="form_register.php">Register</a>