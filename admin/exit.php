<?php 
    session_start();
    sleep(1);
    if($_SESSION['admin']){
        session_destroy();
        echo("<script>location.href = '../account/login.php';</script>");
    }else{
        echo("<script>location.href = '../index.php';</script>");
    }

?>