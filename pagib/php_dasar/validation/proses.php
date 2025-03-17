<?php 
session_start();
if($_POST['nama']==""){
    $_SESSION['err']['error_nama'] = "Nama tidak boleh kosong";
}
if($_POST['hp']==""){
    $_SESSION['err']['error_hp'] = "HP tidak boleh kosong";
}
if($_POST['alamat']==""){
    $_SESSION['err']['error_alamat'] = "Alamat tidak boleh kosong";
}

if($_POST['nama']=="" || $_POST['hp']=="" || $_POST['alamat']==""){
    header('location:form.php');
}