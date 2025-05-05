<?php 
session_start();
if( isset($_SESSION['login']) ){
    header('location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span style="color:green">
    <?php 
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
        }
    ?>
    </span>
    <span style="color:red">
    <?php 
        if(isset($_SESSION['error']['duplicate'])){
            echo $_SESSION['error']['duplicate'];
        }
    ?>
    </span>
    <form action="proses/proses_register.php" method="POST">
        <div>
            <label for="">Nickname</label><br>
            <input type="text" name="nickname"><br>
            <span style="color:red">
                <?php 
                    if(isset($_SESSION['error_nickname'])){
                        echo $_SESSION['error_nickname'];
                    }
                ?>
            </span>

        </div>
        <div>
            <label for="">Username</label><br>
            <input type="text" name="username"><br>
            <span style="color:red">
                <?php 
                    if(isset($_SESSION['error']['username'])){
                        echo $_SESSION['error']['username'];
                    }
                ?>
            </span>
        </div>
        <div>
            <label for="">Password</label><br>
            <input type="password" name="password"><br>
            <span style="color:red">
                <?php 
                    if(isset($_SESSION['error']['password'])){
                        echo $_SESSION['error']['password'];
                    }
                ?>
            </span>
        </div>
        <div>
            <label for="">Password Confirm</label><br>
            <input type="password" name="password2"><br>
            <span style="color:red">
                <?php 
                    if(isset($_SESSION['error']['password2'])){
                        echo $_SESSION['error']['password2'];
                    }
                ?>
            </span>
        </div>
        <div>
            <label for="">Role</label><br>
            <select name="role" id="">
                <option value="admin">Administrator</option>
                <option value="user">User</option>
            </select>
        </div>
        <br>
        <div>
            <button type="submit">Register Now</button>
        </div>
    </form>
    <br>
    <a href="form_login.php">Login</a>
</body>

</html>

<?php 
session_destroy();
?>