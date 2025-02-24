<?php 
session_start();

$_SESSION['warna'] = "red";

echo $_SESSION['warna'];