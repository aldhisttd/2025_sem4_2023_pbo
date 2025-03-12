<?php 
session_start();
?>
<form action="proses.php" method="post">

    <div>
        <label for="">Username</label><br>
        <input type="text" name="username"><br>

        <?php 
            if(isset($_SESSION['error_username'])){
                echo '<span style="color: red;">'.$_SESSION['error_username'].'</span>';
            }
        ?>

    </div>
    <br>
    <div>
        <label for="">Password</label><br>
        <input type="text" name="password"><br>
        <?php 
            if(isset($_SESSION['error_password'])){
                echo '<span style="color: red;">'.$_SESSION['error_password'].'</span>';
            }
        ?>
    </div>
    <br>
    <div>
        <button type="submit" name="form-submit">Login</button>
    </div>

</form>

<?php

session_destroy();
?>