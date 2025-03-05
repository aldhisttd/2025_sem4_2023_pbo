<form action="proses3.php" method="post" enctype="multipart/form-data">

    <h3>Input File</h3>
    <input type="file" name="photo">
    <br>
    <br>
    <div>
        <button type="submit">Proses</button>
    </div>

</form>



<hr>
<form action="proses2.php" method="post">

    <!-- <p style="color: red; font-style: italic;">Hobi belum dipilih</p> -->
    <?php 
    session_start();

    if(isset($_SESSION['error'])){
        echo '<p style="color: red; font-style: italic;">Hobi belum dipilih</p>';
        session_destroy();
    }

    ?>

    <h4>Your Hobbies</h4>
    <input type="checkbox" value="Belajar" name="hobi[]">
    <label for="">Belajar</label>
    <input type="checkbox" value="Shopping" name="hobi[]">
    <label for="">Shoping</label>
    <input type="checkbox" value="Singing" name="hobi[]">
    <label for="">Singging</label>

    <br>
    <div>
        <button type="submit">Proses</button>
    </div>
</form>



<hr>
<form action="proses.php" method="post">

    <h4>Gender</h4>
    <input type="radio" name="gender" value="Laki-laki">
    <label for="">Laki-laki</label>
    <input type="radio" name="gender" value="Perempuan" checked>
    <label for="">Perempuan</label>
    <br>
    <div>
        <button type="submit">Proses</button>
    </div>

</form>