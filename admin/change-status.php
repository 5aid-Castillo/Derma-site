<?php 
     include('../db/connect_db.php');
     session_start();
     if(@!$_SESSION['admin']){
         echo("<script>location.href = '../account/login.php';</script>");   
     }
     
     if(isset($_POST['send'])){
     $id_pedido = $_GET['id_pedido'];
     $status = $_POST['estatus'];

     $query = mysqli_query($link,"UPDATE pedido SET status='$status' WHERE id_pedido = '$id_pedido' ");
     $query2 = mysqli_query($link,"SELECT * FROM usuarios INNER JOIN pedido 
        ON usuarios.id_usuario = pedido.id_usuario");    
    $sql = mysqli_fetch_array($query2);
    
     echo("<script>location.href = '../panel/order.php?id=".$sql['id_usuario']."';</script>");
    }else{
        
        echo("<script>location.href = '../panel/order.php';</script>");
     }
?>