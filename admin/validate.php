<?php 
    session_start();
    $_SESSION['idu'] = $result['id_usuario'];
    $_SESSION['admin'] = $result['usuario'];
    echo("<script>location.href = '../panel/index.php';</script>");

?>