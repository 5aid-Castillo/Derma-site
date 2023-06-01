<?php 
     include('../db/connect_db.php');
     session_start();
     if(@!$_SESSION['admin']){
         echo("<script>location.href = '../account/login.php';</script>");   
     }

     $producto = $_GET['id_producto'];

     mysqli_query($link,"DELETE FROM productos WHERE id_producto = $producto");
     
     echo("<script>location.href = './productos.php';</script>");

?>