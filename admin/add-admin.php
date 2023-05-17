<?php 
    include('../db/connect_db.php');
    session_start();
    if(@!$_SESSION['admin']){
        echo("<script>location.href = '../account/login.php';</script>");   
    }

    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuarios VALUES (NULL,'$nombre','$correo','$password','1')";

    $query = mysqli_query($link,$sql);

    if($query){
        echo("<script>location.href = '../panel/admin.php';</script>");       
    }else{}
?>