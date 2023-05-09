<?php 
    include("../db/connect_db.php");
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $comments = $_POST['comments'];

    

    mysqli_query($link,"INSERT INTO comentarios VALUES(NULL,'$name','$email','$comments')");
               
?>