<?php
include('./db/connect_db.php');
session_start();
if(@!$_SESSION['user']){
    echo("<script>location.href = './account/login.php';</script>");
  } 

  $id_user = $_SESSION['idu'];
  $query = mysqli_query($link,"SELECT * FROM directo WHERE id_usuario = '$id_user' ORDER BY id_compra DESC LIMIT 1");
  date_default_timezone_set('America/Mexico_City');
 

  while($row = mysqli_fetch_array($query)){
      $pedido = $row['id_producto'];
      $cantidad = $row['cant'];

     
  mysqli_query($link,"INSERT INTO pedido VALUES(NULL,'Paypal','$pedido','$id_user','$cantidad',CURDATE(),'Pendiente')");
  }
  mysqli_query($link, "DELETE FROM directo WHERE id_usuario = '$id_user'");
  echo("<script>location.href = './thankyou.php'; </script>");

?>