<?php 
    include('../db/connect_db.php');
    session_start();
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../account/login.php';</script>");
      } 

    $id_user = $_SESSION['idu'];
    $query = mysqli_query($link,"SELECT * FROM carrito WHERE id_usuario = '$id_user'");
    date_default_timezone_set('America/Mexico_City');
   

    while($row = mysqli_fetch_array($query)){
        $pedido = $row['id_producto'];
        $cantidad = $row['cantidad'];
       
    mysqli_query($link,"INSERT INTO pedido VALUES(NULL,'Oxxo','$pedido','$id_user','$cantidad',CURDATE())");
    }
    mysqli_query($link, "DELETE FROM carrito WHERE id_usuario = '$id_user'");
    echo("<script>location.href = '../account/order.php'; </script>");

?>