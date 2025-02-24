<?php 

// echo $nama;
session_start();
echo $_SESSION['nama'];

session_destroy();

?>