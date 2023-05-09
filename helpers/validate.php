<?php
 include('../db/connect_db.php');
/*  session_start();
 */
$email_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
     $email_l = $_POST['user-l'];
     $password = sha1($_POST['passwd']);
 $query = mysqli_query($link,"SELECT * FROM usuarios WHERE correo ='$email_l'");
     if($result = mysqli_fetch_array($query)){
         if($password == $result['password']){
             session_start();   
            $_SESSION['idu'] = $result['id_usuario'];
            $_SESSION['user'] = $result['usuario']; 
            
            echo("<script>location.href = '../index.php';</script>");
            
        }else{
            $password_err = 'La contraseña es incorrecta';
        }
    }else{
        $email_err = 'Este usuario no existe';
    }
 }
 mysqli_close($link);
?>
