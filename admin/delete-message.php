<?php 
    include('../db/connect_db.php');
    session_start();
    if(@!$_SESSION['admin']){
        echo("<script>location.href = '../account/login.php';</script>");
    }
    $id_comentario = $_REQUEST['id_message'];

    $sql = ("DELETE FROM comentarios WHERE id_comentario = '".$id_comentario."'");

    mysqli_query($link, $sql);

    if($sql){
        echo("<script>location.href = '../panel/message.php';</script>");
    }
?>