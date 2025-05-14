<?php 

include "../../assets/helper/koneksi.php";

$nama = $_POST['nama'];

$sqlInsert = "INSERT INTO kategori(id, nama) VALUES(null, '$nama')";
mysqli_query($koneksi, $sqlInsert);

header('location:../../app.php?modul=data_kategori');


// $sqlEdit = "UPDATE kategori SET nama='Makanan Enak' WHERE id=1";

// $sqlSelectAll = "SELECT * FROM kategori";
// $sqlSelectId = "SELECT * FROM kategori WHERE id=1";

// $sqlDelete = "DELETE FROM kategori WHERE id=1";


