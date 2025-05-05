<?php
session_start();
if (isset($_SESSION['login'])) {
    header('location:index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid bg-dark py-5">
        <div class="row justify-content-center">
            <div class="col-3 bg-light py-5 px-3">

                <?php 
                    if(isset($_SESSION['error']['login'])){
                    ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['error']['login'] ?>
                        </div>
                    <?php
                    }
                ?>


                <form action="proses/proses_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input name="username" type="text" class="form-control 
                        <?php 
                            if(isset($_SESSION['error']['username'])){
                                echo "is-invalid";
                            }
                        ?>
                        " placeholder="Input username anda">
                        <div class="invalid-feedback">
                            <?php echo $_SESSION['error']['username'] ?>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="text" class="form-control" placeholder="Input password anda">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    
                    <a href="form_register.php">Register</a>
                </form>



                
                


            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>

<?php
session_destroy();
?>