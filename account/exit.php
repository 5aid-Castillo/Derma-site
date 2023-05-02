<?php 
    session_start();
    sleep(1);
    if($_SESSION['user']){
        session_destroy();
        echo("<script>location.href = './login.php';</script>");
    }else{
        echo("<script>location.href = '../index.php';</script>");
    }

?>