<?php 
session_start();

$_SESSION['nama'] = "Budi Session";
echo $_SESSION['nama'];