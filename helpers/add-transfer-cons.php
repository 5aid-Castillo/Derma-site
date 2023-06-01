<?php 
/* "https://wa.me/522212193377?text=Hola!%20Realice%20una%20consulta%20en%20linea%20y%20este%20es%20mi%20comprobante%20de%20pago.%20A%20nombre%20de:" */
include('../db/connect_db.php');
session_start();
if(@!$_SESSION['user']){
    echo("<script>location.href = '../account/login.php';</script>");
  } 

$id_user = $_SESSION['idu'];
$query = mysqli_query($link,"UPDATE consulta SET estatus='Transferencia' WHERE id_usuario = $id_user ORDER BY id_consulta DESC LIMIT 1");
echo("<script>location.href = 'https://wa.me/522212193377?text=Hola!%20Realice%20una%20consulta%20en%20linea%20y%20este%20es%20mi%20comprobante%20de%20pago.%20A%20nombre%20de:'; </script>");


?>