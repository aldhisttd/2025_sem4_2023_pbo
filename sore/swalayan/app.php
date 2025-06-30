<?php 
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <?php include "komponen/head.php" ?>
    </head>
    <body data-sidebar="dark">
        <div id="layout-wrapper">
            <?php include "komponen/header.php" ?>
            <?php include "komponen/sidebar.php" ?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <?php 
                            if(!isset($_REQUEST['page'])){
                                $_REQUEST['page'] = 'dashboard';
                                exit();
                            }
                            include "konten/".$_REQUEST['page'].".php";
                        ?>
                    </div>
                </div>
                <?php include "komponen/footer.php" ?>
            </div>
        </div>
        <?php include "komponen/right-sidebar.php" ?>
        <div class="rightbar-overlay"></div>
        <?php include "komponen/script.php" ?>

    </body>
</html>

<?php 
unset($_SESSION['alert']);
?>