<?php

if(isset($_GET['username'])){
    echo $_GET['username'];
    echo $_GET['password'];
}else{
    header("location:form.php");
}

?>