<?php 

session_start();
if(isset($_SESSION['login'])){
    header('location:app.php?modul=dashboard');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center  align-items-center" style="height:100vh">
            <div class="col-md-5">

                <form action="config/form-login-proses.php" method="post">

                    <div class="bg-white p-5 rounded">

                        

                        <div class="text-center">
                            <img width="100" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow@2x.png" alt=""><br>
                            <h3>Form Login</h3>
                        </div>
                        <hr>

                        <?php
                        if (isset($_SESSION['er_login'])) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['er_login'] ?>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="form-group mb-3">
                            <label>Username</label>
                            <input type="text" class="form-control form-control-lg <?= isset($_SESSION['er_username']) ? 'is-invalid' : null ?>" name="username">
                            <div class="invalid-feedback">
                                <?= $_SESSION['er_username'] ?>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control form-control-lg <?= isset($_SESSION['er_password']) ? 'is-invalid' : null ?>" name="password">
                            <div class="invalid-feedback">
                                <?= $_SESSION['er_password'] ?>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>

                        <br>
                    </div>

                </form>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>

<?php
session_destroy();
?>