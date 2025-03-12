<?php 

if(!isset($_POST['form-submit'])){
    header('location:form.php');
}

// disini prosesnya
session_start();
if($_POST['username']==""){
    $_SESSION['error_username'] = "Username tidak boleh kosong";
}

if($_POST['password']==""){
    $_SESSION['error_password'] = "Password tidak boleh kosong";
}


if( $_POST['username']=="" || $_POST['password']=="" ){
    header('location:form.php');
}

// 

