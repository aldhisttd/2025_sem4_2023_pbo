<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Upload</label><br>
            <input type="file" name="photo">
        </div>
        <div>
            <label for="">Bakso</label>
            <input type="checkbox" name="menu[]" value="Bakso">
            <label for="">Nasi Goreng</label>
            <input type="checkbox" name="menu[]" value="Nasi Goreng">
            <label for="">Mie Ayam</label>
            <input type="checkbox" name="menu[]" value="Mie Ayam">
        </div>
        <div>
            <label for="">Makanan</label>
            <input type="radio" name="kategori" value="Makanan">
            <label for="">Minuman</label>
            <input type="radio" name="kategori" value="Minuman">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>