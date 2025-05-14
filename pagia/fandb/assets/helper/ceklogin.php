<?php 
if(isset($_SESSION['login'])){
    header('location:app.php?modul=beranda');
    exit();
}