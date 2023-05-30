<?php 
    include('../db/connect_db.php');
    session_start();
     if(@!$_SESSION['user']){
        echo("<script>location.href = '../account/account.php';</script>");
    }else{ 
        $id_user = $_SESSION['idu'];
        
        $query = mysqli_query($link,"UPDATE consulta SET estatus='Oxxo' WHERE id_usuario = $id_user ORDER BY id_consulta DESC LIMIT 1");
        echo("<script>location.href = '../pages/confirmacion.php';</script>"); 
    }
?>