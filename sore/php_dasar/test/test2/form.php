<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">

        <div>
            <label for="">File</label><br>
            <input type="file">
        </div>
        <br>
        <div>
            <label for="">Jenis Warna</label><br>
            
            <input type="checkbox" name="warna[]"> Merah
            <input type="checkbox" name="warna[]"> Kuning
            <input type="checkbox" name="warna[]"> Hijau
        </div>
        <br>
        <div>
            <label for="">Kategori</label><br>
            
            <input type="radio" name="kategori"> Vector
            <input type="radio" name="kategori"> Bitmap
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>

    </form>

</body>
</html>