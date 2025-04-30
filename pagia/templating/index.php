<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Header</h1>
    <?php include "komponen/menu.php"; ?>

    <?php 
        $page = $_REQUEST['page'];
        include $page.".php";
    ?>

    <h1>Footer</h1>
    
</body>
</html>