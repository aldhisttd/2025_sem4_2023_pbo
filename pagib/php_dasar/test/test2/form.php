<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="proses.php" method="POST" enctype="multipart/form-data">

        <div>
            <label for="">File/Photo</label><br>
            <input type="file" name="file">
        </div>
        <br>
        <div>
            <label for="">Hobi Olahraga</label><br>

            <input type="checkbox" name="hobi[]" value="Olahraga">
            <label for="">Sepakbola</label>

            <input type="checkbox" name="hobi[]" value="Badminton">
            <label for="">Badminton</label>
        </div>
        <br>
        <div>
            <label for="">Jadwal Olahraga</label><br>

            <input type="radio" name="jadwal" value="Pagi">
            <label for="">Pagi</label>

            <input type="radio" name="jadwal" value="Malam">
            <label for="">Malam</label>
        </div>

        <br><br>
        <div>
            <button type="submit">Submit</button>
        </div>

    </form>

</body>
</html>