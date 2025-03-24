<?php
session_start();
if (isset($_SESSION['is_login'])) {
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

    <div class="container">

        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-md-6 col-lg-4 bg-white py-3 rounded-3 px-4">

                <div class="text-center">
                    <img src="https://sttdumai.ac.id/assets/image/material/icon/logo.png" alt="" class="img-fluid mb-2" width="100">
                    <h4>Form Registration</h4>
                </div>
                <hr>

                <?php
                if (isset($_SESSION['err']['login_fail'])) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['err']['login_fail'] ?>
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

                <form action="proses/proses_register.php" method="post">
                    <div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" name="fullname" value="<?= (isset($_SESSION['log']['fullname'])) ? $_SESSION['log']['fullname'] : null ?>" class="form-control <?= (isset($_SESSION['err']['fullname'])) ? 'is-invalid' : null ?>" id="exampleFormControlInput1" placeholder="Type your fullname here">
                            <div class="invalid-feedback">
                                <?= $_SESSION['err']['fullname'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" name="username" value="<?= (isset($_SESSION['log']['username'])) ? $_SESSION['log']['username'] : null ?>" class="form-control <?= (isset($_SESSION['err']['username'])) ? 'is-invalid' : null ?>" id="exampleFormControlInput1" placeholder="Type your username here">
                            <div class="invalid-feedback">
                                <?= $_SESSION['err']['username'] ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control <?= (isset($_SESSION['err']['pass'])) ? 'is-invalid' : null ?>" id="exampleFormControlInput1" placeholder="Type your password here">
                            <div class="invalid-feedback">
                                <?= $_SESSION['err']['pass'] ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="pass_confirm" class="form-control mt-2 <?= (isset($_SESSION['err']['pass_fail'])) ? 'is-invalid' : null ?>" id="exampleFormControlInput1" placeholder="Type your confirmation password here">
                            <div class="invalid-feedback">
                                <?= $_SESSION['err']['pass_fail'] ?>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>

                    </div>
                </form>

                <div class="mt-5 text-end">
                    <a href="login.php">Login</a>
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php
unset($_SESSION['err']);
unset($_SESSION['success']);
unset($_SESSION['log']);
?>