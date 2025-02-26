<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol type="a">
        <li>List 1</li>
        <li>List 2</li>
        <li>List 3</li>
    </ol>


    <ol type="a">
        
        <?php 
            for ($i=1; $i <= 100 ; $i++) { 
                echo "<li>List ". $i ."</li>";
            }
        ?>

    </ol>
</body>
</html>