<?php 
    include('../db/connect_db.php');
    session_start();
    $id_user = $_SESSION['idu'];

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

    mysqli_query($link,"INSERT INTO datos VALUES(NULL,'$name','$surnames','$phone','$street','$outside','$inside','$cologne','$cp','$city','$state','$id_user')");
    echo("<script>location.href = '../payments.php';</script>");
    



?>