<?php


// Función que retorna información de un solo producto
function getSingleProductInfoApi($conexion,$id){

    $stmt = $conexion->prepare('SELECT * FROM producto WHERE id = :id');
    $stmt->execute(array(':id' => $id));

	$data = $stmt->fetch();

    return $data;
}

// Función que retorna toda la información de todos los productos
function getAllproductsInfoApi($conexion){

    $stmt = $conexion->prepare('SELECT * FROM producto');
    $stmt->execute();

    $data = $stmt->fetchAll();

    return $data;
}


// Función que maneja la subida de imagenes de productos (ADMIN)
function handleUploadedImage($file) {
    $dir = dirname(__FILE__)."/imgProducts/"; // checar path para meter la carpeta de imgs afuera
    $fileName = "";
    $fileWithoutPath = "";
        $dataType = explode("/",$file['file']['type'])[0]; 
        if ( $dataType == "image" )  {
            $rand = uniqid();
            $name = explode(".",$file['file']['name'])[0];
            $ext = pathinfo($file['file']['name'], PATHINFO_EXTENSION);
            $fileName = $dir.$rand."_".$name.".".$ext;
            $fileWithoutPath = $rand."_".$name.".".$ext;
        if (!copy($file['file']['tmp_name'], $fileName)) {
            return "Error al copiar \n";
        } else {
            return $fileWithoutPath;
        }
        } else {
            return "no es archivo";
        }
}


// QUERIES OF INSERTS, UPDATES AND DELETES (SQL)

function insertNewProduct($conexion, $data, $file) {

    $newImage = handleUploadedImage($file);

    $stmt = $conexion->prepare("INSERT INTO producto (id,nombre,descripcion, precio, img, etiqueta, categoria) VALUES (null, :name, :des, :price, :img, :tag, :category)");

    $stmt->execute(array(
        'name' => $data['name'],
        'des' => $data['description'],
        'price' => $data['price'],
        'img' => $newImage,
        'tag' => $data['tag'],
        'category' => $data['category']
    ));

}

function deleteImageFromDir($conexion, $id) {
    $stmt = $conexion->prepare('SELECT img FROM producto WHERE id = :id');
    $stmt->execute( array('id' => $id));

    $data = $stmt->fetch();
    $dir = dirname(__FILE__)."/imgProducts/"; // checar path para meter la carpeta de 
    $fileToDelete = $data['img'];
    unlink($dir.$fileToDelete);
}

function deleteProduct($conexion, $id) {

    deleteImageFromDir($conexion, $id);
    $stmt = $conexion->prepare("DELETE FROM producto WHERE id = :id");
    $stmt->execute(array('id' => $id));
}

function updateProduct($conexion, $data, $file) {

    deleteImageFromDir($conexion, $data['idProd']);
    $newImage = handleUploadedImage($file);

    $stmt = $conexion->prepare("UPDATE producto SET nombre = :name, descripcion = :des, precio = :price, img = :img, etiqueta = :tag WHERE id = :id ");

    $stmt->execute(array(
        'name' => $data['name'],
        'des' => $data['description'],
        'price' => $data['price'],
        'img' => $newImage,
        'tag' => $data['tag'],
        'id' => $data['idProd']
    ));

}

function getDiscountInfoApi($conexion,$descuento){

    $stmt = $conexion->prepare('SELECT cantidad FROM descuentos WHERE nombre = :nombre and usos > 0');
    $stmt->execute(array(':nombre' => $descuento));

    $data = $stmt->fetch();

    return $data;
}
?>
