<?php 

// if(isset($_POST['warna'])){

//     echo $_POST['warna'];

// }else{
//     echo "warna tidak dipilih";
// }

// echo $warna;

// $warna = ['merah', 'kuning'];

$warna = $_POST['warna'];

foreach ($warna as $key => $value) {
    echo $value;
    echo "<br>";
}