<?php 

if(isset($_POST['hobi'])){
    foreach ($_POST['hobi'] as $key => $value) {
        echo $value;
        echo "<br>";
    }
}else{
    session_start();
    $_SESSION['error'] = 1;
    header('location:form.php');
}

// $hobi = "Belajar";
// $hobi = ["Belajar","Shopping","Singing"];

// foreach ($hobi as $key => $value) {
//     echo $value;
// }