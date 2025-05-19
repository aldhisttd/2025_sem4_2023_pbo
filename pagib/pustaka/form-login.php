<?php 

session_start();
if(isset($_SESSION['login'])){
    header('location:app.php?modul=dashboard');
}
?>
form login