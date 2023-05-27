<?php 
     include('../db/connect_db.php');
     session_start();
     if(@!$_SESSION['user']){
         echo("<script>location.href = '../account/account.php';</script>");
     }else{
        echo("<script>location.href= '../pages/consultaenlinea.php'; </script>");
    }
?>