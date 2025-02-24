<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
$bg = "green";
?>
<body style="background-color: <?php echo $bg ?>;">
    <ul>
        <li>list 1</li>
        <li>list 2</li>
        <li>list 3</li>
    </ul>

    <ul>
        <?php 
            for ($i=1; $i <= 100; $i++) { 
                echo "<li>list ".$i."</li>";
            }
        ?>
    </ul>

</body>
</html>