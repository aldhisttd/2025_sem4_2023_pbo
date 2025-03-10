<?php 
session_start();
if($_POST['nama']==""){
    $_SESSION['error_nama'] = "Nama tidak boleh kosong";
}
if($_POST['hp']==""){
    $_SESSION['error_hp'] = "HP tidak boleh kosong";
}
if($_POST['alamat']==""){
    $_SESSION['error_alamat'] = "Alamat tidak boleh kosong";
}

if($_POST['nama']=="" || $_POST['hp']=="" || $_POST['alamat']==""){
    header('location:form.php');
}

// insert DB


// if(
//     isset($_POST['nama']) && 
//     isset($_POST['hp']) && 
//     isset($_POST['alamat'])
// ){
//     echo $_POST['nama'];
// }else{
//     header('location:form.php');
// }