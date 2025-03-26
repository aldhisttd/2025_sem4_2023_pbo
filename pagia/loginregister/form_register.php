<?php
session_start();
if (isset($_SESSION['isLogin'])) {
    header('location:dashboard.php');
    exit();
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">


    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-11 col-sm-6 col-md-3 bg-white py-3 px-3 rounded">

                <div class="text-center">
                    <img src="https://sttdumai.ac.id/assets/image/material/icon/logo.png" width="80" class="img-fluid" alt="...">
                    <h4 class="mt-3">Form Registration</h4>
                </div>

                <hr>

                <?php
                if (isset($_SESSION['err']['username_duplicate'])) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['err']['username_duplicate'] ?>
                    </div>
                <?php
                }
                ?>

                <?php
                if (isset($_SESSION['success'])) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['success'] ?>
                    </div>
                <?php
                }
                ?>

                <form action="proses/proses_register.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nickname</label>

                        <input type="text" value="<?= (isset($_SESSION['log']['nickname'])) ? $_SESSION['log']['nickname'] : null ?>" name=" nickname" class="form-control <?= (isset($_SESSION['err']['nickname'])) ? 'is-invalid' : null ?>" placeholder="Input your nickname">
                        <div class="invalid-feedback">
                            <?= $_SESSION['err']['nickname'] ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" value="<?= (isset($_SESSION['log']['username'])) ? $_SESSION['log']['username'] : null ?>" name="username" class="form-control <?= (isset($_SESSION['err']['username'])) ? 'is-invalid' : null ?>" placeholder="Input your username">
                        <div class="invalid-feedback">
                            <?= $_SESSION['err']['username'] ?>
                        </div>
                    </div>
                    <div class="">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control <?= (isset($_SESSION['err']['password'])) ? 'is-invalid' : null ?>" placeholder="Input your password">
                        <div class="invalid-feedback">
                            <?= $_SESSION['err']['password'] ?>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <input type="password" name="conf_password" class="form-control <?= (isset($_SESSION['err']['conf_password'])) ? 'is-invalid' : null ?>" placeholder="Input your confirmation password">
                        <div class="invalid-feedback">
                            <?= $_SESSION['err']['conf_password'] ?>
                        </div>
                    </div>

                    <div>
                        <div class="d-grid gap-2">
                            <button name="submit" class="btn btn-primary btn-lg" type="submit">Register</button>
                        </div>
                    </div>


                </form>

                <div class="text-end mt-5">
                    <a href="form_login.php">Login >></a>
                </div>


            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php
unset($_SESSION['err']);
unset($_SESSION['log']);
unset($_SESSION['success']);
?>