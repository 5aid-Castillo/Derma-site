<?php 
    include('../db/connect_db.php');
    session_start();
    if(@!$_SESSION['admin']){
        echo("<script>location.href = '../account/login.php';</script>");   
    }

    $id_pedido = $_GET['id'];
    mysqli_query($link, "DELETE FROM pedido WHERE id_pedido = '$id_pedido'");

    $query = mysqli_query($link,"SELECT * FROM usuarios INNER JOIN pedido 
    ON usuarios.id_usuario = pedido.id_usuario");    
    $sql = mysqli_fetch_array($query);
    echo("<script>location.href = '../panel/order.php?id=".$sql['id_usuario']."';</script>"); 
?>