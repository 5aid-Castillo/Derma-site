<?php 
    include('../db/connect_db.php');
    session_start();
    if(@!$_SESSION['admin']){
        echo("<script>location.href = '../account/login.php';</script>");   
    }

    $id_admin = $_SESSION['admin'];

    $ide = $_REQUEST['id_admin'];

    $consulta = "SELECT * FROM usuarios WHERE roll = '1'";
    $result = mysqli_query($link,$consulta);

    $rowcount = mysqli_num_rows($result);

    if($rowcount == 1){
        echo("<script>location.href = '../panel/admin.php';</script>");
    
    }else{
        $sql = "DELETE FROM usuarios WHERE id_usuario = '$ide'";

    }

    $query = mysqli_query($link, $sql);

    if($query){
        echo("<script>location.href = '../panel/admin.php';</script>");
    
    }

?>