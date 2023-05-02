<?php 
require('../db/connect_db.php');
if(isset($_POST['sign__up'])){
        
    
        $campos  = array(); 

        $checkmail = mysqli_query($link, "SELECT * FROM usuarios WHERE correo = '$email'");
        $result = mysqli_num_rows($checkmail);
        /* $regex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/'; 
         */
            if(strlen($name) < 4){
                array_push ($campos, "El nombre no es valido <br>");
            }
            if(strlen($name) > 15){
                array_push($campos,"El nombre es demasiado largo <br>");
            }
            
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                array_push($campos,"El email no es valido <br>");
            }
            if(strlen($pass) < 6){
                array_push($campos,"La contraseña no es valida<br>");
            }else{

                if($pass !== $pass_r){
                    array_push($campos,"Las contraseñas no coinciden<br>");
                }
            }
            if($result > 0){
                array_push($campos, "El correo electronico ya esta en uso<br>");
            }
            if(count($campos) > 0){
                for($i=0;$i<count($campos); $i++){
                    echo "$campos[$i]";
                }
            }else{
                $encrypt = sha1($pass);
                mysqli_query($link,"INSERT INTO usuarios VALUES(NULL,'$name','$email','$encrypt','0')");
                echo("<script>location.href = '../index.php';</script>");
               
        }

    }
 
    ?>