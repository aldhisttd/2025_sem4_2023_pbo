<?php 
session_start();
if( !isset($_SESSION['login']) ){
    header('location:index.php');
    exit();
}
?>


<h1>Selamat data di facebook</h1>
<h2>Halo, <?php echo $_SESSION['nama'] ?></h2>
<h3>Anda login sebagai <?php echo $_SESSION['role'] ?></h3>

<br>
<a href="proses/logout.php">Logout</a>

<ul>
    <?php 
        if($_SESSION['role']=='admin'){
            echo '<li><a href="#">Menu 1</a></li>';
        }
    ?>
    <li><a href="#">Menu 2</a></li>
</ul>
