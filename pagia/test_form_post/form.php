<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="proses.php" method="POST">

        <div>
            <input type="text" name="nama">
        </div>
        <div>
            <select name="gender" id="">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div>
            <input type="text" name="hp">
        </div>
        <div>
            <textarea name="alamat" id=""></textarea>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>

    </form>

</body>
</html>