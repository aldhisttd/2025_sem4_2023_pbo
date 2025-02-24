<?php 

if(isset($_POST['username'])){
    echo $_POST['username'];
}else{
    header('location:form_post.php');
}
