<style>
    .red{
        color: red;
    }
</style>
<?php 
session_start();
?>
<form action="proses.php" method="post">

    <input type="text" name="nama"><br>
    <?php 
    if(isset($_SESSION['error_nama'])){
        echo '<span class="red">'.$_SESSION['error_nama'].'</span>';
    }
    ?>
    <br>


    <input type="text" name="hp"><br>
    <?php 
    if(isset($_SESSION['error_hp'])){
        echo '<span class="red">'.$_SESSION['error_hp'].'</span>';
    }
    ?>
    <br>
    <input type="text" name="alamat"><br>
    <?php 
    if(isset($_SESSION['error_alamat'])){
        echo '<span class="red">'.$_SESSION['error_alamat'].'</span>';
    }
    ?>

    <br><br>
    <button type="submit" name="submit">Submit</button>

</form>

<?php 
unset($_SESSION['err']);
?>