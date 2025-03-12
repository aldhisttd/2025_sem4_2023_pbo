<?php 

if(!isset($_POST['form-submit'])){
    header('location:form.php');
}

// disini prosesnya
session_start();
if($_POST['username']==""){
    $_SESSION['error_username'] = true;
}

if($_POST['password']==""){
    $_SESSION['error_password'] = true;
}


if( $_POST['username']=="" || $_POST['password']=="" ){
    header('location:form.php');
}

// 

