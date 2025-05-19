<?php 
if(!isset($_REQUEST['modul'])){
    header('location:index.php');
    exit();
}

include "config/koneksi.php";
?>
<!doctype html>
<html lang="en">

    <head>
        <?php include('components/style.php') ?>
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include('components/header.php') ?>
            <?php include('components/menu.php') ?>

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <?php 
                            include "modul/".$_REQUEST['modul'].".php";
                        ?>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include('components/footer.php') ?>
            </div>

        </div>
        <!-- END layout-wrapper -->
        
        <?php include('components/script.php') ?>
    </body>
</html>
