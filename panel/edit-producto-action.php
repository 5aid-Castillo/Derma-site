<?php 
    include("../db/connect_db.php");
    session_start();

    $producto = $_GET['id_producto'];

    $prod = $_POST['producto'];
    $desc = $_POST['descripcion'];
    $res = $_POST['resumen'];
    $precio = $_POST['precio'];
    $prom = $_POST['promocion'];
    $cant = $_POST['porcion'];
    $tipo = $_POST['tipo'];
    $recom= $_POST['recomendaciones'];
    $stock= $_POST['stock'];

    mysqli_query($link,"UPDATE productos SET 
        producto = '$prod',
        descripcion = '$desc',
        resumen='$res',
        precio='$precio',
        promocion='$prom',
        porcion = '$cant',
        tipo = '$tipo',
        recomendaciones = '$recom',
        stock = '$stock' WHERE id_producto = $producto ");

echo("<script>location.href = './productos.php'; </script>");

?>