

<form action="" method="GET">

    <input type="text" name="umur">
    <br>
    <input type="text" name="nama">
    <br>
    <button type="submit">Submit</button>

</form>

<?php
if(isset($_GET['nama'])){
    echo $_GET['nama'];
}

?>  

