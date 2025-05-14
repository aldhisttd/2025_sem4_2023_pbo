<?php 
session_start();
// include "assets/helper/ceknotlogin.php";
include "assets/helper/koneksi.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <?php include "component/style.php" ?>
    </head>
    <body data-sidebar="dark">
        <div id="layout-wrapper">
            <?php include "component/header.php" ?>
            <?php include "component/menu.php" ?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?php 
                            include "modul/".$_REQUEST['modul'].".php";
                        ?>
                        

                    </div> 
                </div>
                
                <?php include "component/footer.php" ?>
            </div>
        </div>
        <?php include "component/script.php" ?>
    </body>
</html>
