<?php 

// ambil nama file asli
$nama_file = $_FILES['photo']['name'];

// ambil extension
$ext = ".".pathinfo($nama_file, PATHINFO_EXTENSION);

// random string
$randomString = bin2hex(random_bytes(16));

// gabungkan random string dengan ext
$fileNameRandom = $randomString.$ext;

// upload gbr/filename.jpg
move_uploaded_file($_FILES['photo']['tmp_name'],"gbr/".$fileNameRandom);

echo $fileNameRandom;
echo "<br>";

foreach ($_POST['menu'] as $key => $value) {
    echo $value;
    echo "<br>";
}

echo "<br>";
echo $_POST['kategori'];
echo '<img src="gbr/'.$fileNameRandom.'" width="100" alt="">';

?>

<img src="gbr/<?= $fileNameRandom ?>" width="100" alt="">
