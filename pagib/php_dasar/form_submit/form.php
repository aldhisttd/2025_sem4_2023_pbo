<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="post">
        <h3>Pilihan warna yang kamu suka :</h3>
        <input type="checkbox" id="warna-merah" name="warna[]" value="merah">
        <label for="warna-merah"> Merah</label><br>

        <input type="checkbox" id="warna-kuning" name="warna[]" value="kuning">
        <label for="warna-kuning"> kuning</label><br>

        <input type="checkbox" id="warna-hijau" name="warna[]" value="hijau">
        <label for="warna-hijau"> hijau</label><br>

        <input type="checkbox" id="warna-biru" name="warna[]" value="biru">
        <label for="warna-biru"> biru</label><br>

        <br>
        <button type="submit">Submit</button>
    </form>

    <form action="proses2.php" method="post">
        <input type="radio" name="gender" value="laki-laki" id="">
        <label> Laki-laki</label><br>
        <input type="radio" name="gender" value="perempuan" id="">
        <label> Perempuan</label><br>

    </form>
    <br><br>
    <hr>
    <form action="proses3.php" method="post" enctype="multipart/form-data">
        <input type="file" name="gbr" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>