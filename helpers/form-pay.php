<?php 
  /*   include('../db/connect_db.php');
    session_start(); */
 
        if(isset($_POST['send'])){
            $id_user = $_SESSION['idu'];
    
    if(isset($_GET['id_producto'])){
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
    
        $id_producto = $_GET['id_producto'];
        mysqli_query($link,"INSERT INTO datos VALUES(NULL,'$name','$surnames','$phone','$street','$outside','$inside','$cologne','$cp','$city','$state','$id_user')");
        
        
        echo("<script>location.href = '../payments.php?id_producto='+$id_producto;</script>");
    }else{
    
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
    
    }
}



?>