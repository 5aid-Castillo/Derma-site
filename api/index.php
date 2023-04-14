<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include 'db.php';
include 'Controllers/api.php';

// Función para sacar información de un solo producto basado en id
function getSingleProductInfo($conexion,$id){
    $data = getSingleProductInfoApi($conexion,$id);
    echo json_encode($data);
}

// Función que retorna toda la información de los productos
function getAllproductsInfo($conexion){
    $data = getAllproductsInfoApi($conexion);
    echo json_encode($data);
}

// Función que saca la información de un descuento.
function getDataDescuento($conexion,$descuento){
    $data = getDiscountInfoApi($conexion,$descuento);
    echo json_encode($data);
}




if ($_SERVER['REQUEST_METHOD'] == 'GET') {



     $peticionValue = $_GET['peticion']; // lo guardamos en una variable
    if ($peticionValue != false){  // si es diferente de falso la petición es veridica

         // sacamos el tipo de petición que requiere

        if ($peticionValue == "singleProduct"){
            $id = $_GET['id'];
            getSingleProductInfo($conexion,$id); 
        }

        if ($peticionValue == "allProducts"){
            getAllproductsInfo($conexion); 
        }

        if ($peticionValue == "descuento") {
            getDataDescuento($conexion,$_GET['nombre']);
        }
        // set response code - 200 OK
        http_response_code(200);       
    } else {
        // set response code - 403 access denied
        echo "access denied";
        http_response_code(403); 
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $json = file_get_contents('php://input');

    var_dump(json_decode($json));

    $peticion = $_POST['action'];

    $imgFile = $_FILES;
   


    if ($peticion == "newProd") { insertNewProduct($conexion,$_POST, $imgFile); }
    else if ($peticion == "delItem") { deleteProduct($conexion,$_POST['id']); }
    else if ($peticion == "updateProd") { updateProduct($conexion,$_POST,$imgFile); }
    http_response_code(200); 
}


 ?>
