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

            $query = mysqli_query($link,"SELECT precio FROM productos WHERE id_producto = '$producto'");
            $result = mysqli_fetch_array($query);

            $price = $result['precio'];
            $total = $price * $contador;

            mysqli_query($link,"INSERT INTO directo VALUES(NULL,'$contador','$total','$id_user','$producto')");
            
    /*         echo("<script>location.href = '../pages/checkout.php';</script>");
     */         
    }else{
        echo("<script>location.href = '../account/account.php';</script>");
            
    }
}
?>