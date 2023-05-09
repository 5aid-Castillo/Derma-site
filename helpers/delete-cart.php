<?php 
    include('../db/connect_db.php');
    session_start();
    if(@!$_SESSION['user']){
        echo("<script>location.href = 'login.php';</script>");
    }
    $id_carrito = $_REQUEST['id_cart'];

$sql = ("DELETE FROM carrito WHERE id_carrito= '".$id_carrito."' ");
mysqli_query($link, $sql);


if($sql){
	echo("<script>location.href = '../account/cart.php';</script>");
}


?>