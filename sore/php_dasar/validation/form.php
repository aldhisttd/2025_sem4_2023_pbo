<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="proses.php" method="post">

        <div>
            <label for="">Username</label><br>
            <input type="text" name="username"><br>
            
            <span style="color:red">Username tidak boleh kosong</span>
        </div><br>
        <div>
            <label for="">Password</label><br>
            <input type="text" name="password">
        </div><br>

        <div>
            <button type="submit" name="submit">Login</button>
        </div>

    </form>
    

</body>
</html>