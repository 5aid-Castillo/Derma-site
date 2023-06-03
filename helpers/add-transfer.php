<?php 
/* "https://wa.me/522212193377?text=Hola!%20Realice%20una%20consulta%20en%20linea%20y%20este%20es%20mi%20comprobante%20de%20pago.%20A%20nombre%20de:" */
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
   
mysqli_query($link,"INSERT INTO pedido VALUES(NULL,'Transferencia','$pedido','$id_user','$cantidad',CURDATE(),'Pendiente')");
}
mysqli_query($link, "DELETE FROM carrito WHERE id_usuario = '$id_user'");
echo("<script>location.href = 'https://wa.me/522212193377?text=Hola!%20Realice%20una%20compra%20en%20linea%20y%20este%20es%20mi%20comprobante%20de%20pago.%20A%20nombre%20de:'; </script>");

?>