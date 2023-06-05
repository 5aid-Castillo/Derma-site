<?php 
  include('../db/connect_db.php');
  session_start();
  if(@!$_SESSION['admin']){
      echo("<script>location.href = '../account/login.php';</script>");   
  }
  if(isset($_POST['send'])){
    $id_cuenta = $_GET['id_cuenta'];
    $cuenta = $_POST['cuenta'];
    $titular = $_POST['titular'];
    $banco = $_POST['banco'];
    
    mysqli_query($link,"UPDATE cuenta SET 
        cuenta = '$cuenta',
        titular = '$titular',
        banco = '$banco'
        WHERE id_cuenta = $id_cuenta");
        echo("<script>location.href = '../panel/account.php';</script>");


  }else{
      echo("<script>location.href = '../panel/edit-account.php';</script>");
}
?>