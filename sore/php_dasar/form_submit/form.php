<form action="proses3.php" method="post" enctype="multipart/form-data">
    <h3>Input File</h3>
    <div>
        <label for="">Photo</label><br>
        <input type="file" name="gambar">
    </div>
    <br>
    <button type="submit">Unggah</button>
</form>


<form action="proses2.php" method="post">
    <h3>Input Checkbox</h3>
    <div>
        <label for="">Makes</label><br>
        <input type="checkbox" name="makes[]" value="Bakso"> Bakso
        <input type="checkbox" name="makes[]" value="Mie Ayam"> Mie Ayam
        <input type="checkbox" name="makes[]" value="Nasi Goreng"> Nasi Goreng
    </div>
    <br>
    <button type="submit">Submit</button>
</form>


<form action="proses1.php" method="post">
    <h3>Input Radio</h3>
    <div>
        <label for="">Kelas</label><br>
        <input type="radio" name="kelas" value="Pagi"> Pagi
        <input type="radio" name="kelas" value="Malam"> Malam
    </div>
    <br>
    <button type="submit">Submit</button>
</form>