<?php 
    include('../db/connect_db.php');
    session_start();
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../account/account.php';</script>");
    }else{
   
    

        if(isset($_GET['id_producto'])){
            
            $producto = $_GET['id_producto'];
            $contador = $_POST['contador'];
            $id_user = $_SESSION['idu'];
                    $query =mysqli_query($link,"SELECT precio FROM productos WHERE id_producto= $producto");
                    $result = mysqli_fetch_array($query);
                    
                    $price = $result['precio'];
                    $subtotal= $price * $contador;
                    mysqli_query($link,"INSERT INTO carrito VALUES(NULL,'$id_user','$producto','$contador','$subtotal')"); 
             
            /* echo("<script>location.href = '../pages/products.php?id_producto=$producto';</script>"); */
            echo("<script>location.href = '../account/cart.php';</script>");
            

        }else{

            echo("<script>location.href = '../account/account.php';</script>");
        }
    } 


?>