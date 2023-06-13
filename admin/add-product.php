<?php 
    include('../db/connect_db.php');
    session_start();


    //Si se quiere subir una imagen
    if (isset($_POST['subir'])) {
       //Recogemos el archivo enviado por el formulario
       $archivo = $_FILES['archivo']['name'];
       //Si el archivo contiene algo y es diferente de vacio
       if (isset($archivo) && $archivo != "") {
          //Obtenemos algunos datos necesarios sobre el archivo
          $tipo = $_FILES['archivo']['type'];
          $tamano = $_FILES['archivo']['size'];
          $temp = $_FILES['archivo']['tmp_name'];
          //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
         if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
            echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
            - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
         }
         else {
            //Si la imagen es correcta en tamaño y tipo
            //Se intenta subir al servidor
            if (move_uploaded_file($temp, '../img/products/'.$archivo)) {
                //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                chmod('../img/products/'.$archivo, 0777);
                //Mostramos el mensaje de que se ha subido co éxito
                $prod = $_POST['producto'];
                $desc = $_POST['descripcion'];
                $res = $_POST['resumen'];
                $precio = $_POST['precio'];
                $cat = $_POST['categoria'];
                $prom = $_POST['promocion'];
                $cant = $_POST['porcion'];
                $tipo = $_POST['tipo'];
                $recom= $_POST['recomendaciones'];
                $stock= $_POST['stock'];
            
            
                mysqli_query($link,"INSERT INTO productos VALUES (NULL,'$prod','$archivo','$desc','$res','$precio','$cat','$prom','$cant','$tipo','$recom','$stock')");
                echo("<script>location.href = '../panel/productos.php'; </script>");
            }
            else {
               //Si no se ha podido subir la imagen, mostramos un mensaje de error
               echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
          }
       }
    }

?>