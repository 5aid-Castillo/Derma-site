<?php 
    include('../db/connect_db.php');
    $name = $_POST['nombre'];
    $surnames = $_POST['apellidos'];
    $phone = $_POST['telefono'];
    $street = $_POST['calle'];
    $outside = $_POST['exterior'];
    $inside = $_POST['interior'];
    $cologne = $_POST['colonia'];
    $cp = $_POST['postal'];
    $city = $_POST['ciudad'];
    $state = $_POST['estado'];

    mysqli_query($link,"INSERT INTO datos VALUES(NULL,'$name','$surnames','$phone','$street','$outside','$inside','$cologne','$cp','$city','$state')");
    echo("<script>location.href = '../payments/payments.php';</script>");
    



?>