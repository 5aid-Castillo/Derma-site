<?php 
include('../db/connect_db.php');
session_start();
if(@!$_SESSION['admin']){
    echo("<script>location.href = '../account/login.php';</script>");   
}

if(isset($_GET['id_consulta'])){
    $consulta = $_GET['id_consulta'];
    mysqli_query($link,"DELETE FROM consulta WHERE id_consulta = $consulta");
    echo("<script>location.href = '../panel/consultas.php';</script>");   
}

?>