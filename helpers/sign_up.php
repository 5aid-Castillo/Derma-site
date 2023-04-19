<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    require('../db/connect_db.php');

    /* $con =  mysqli_query($link,"SELECT * FROM usuarios WHERE correo = '$email'");
    $check_mail = mysqli_num_rows($con);
    if($check_mail > 0){
        echo ' <script
				language="javascript">alert("Atencion,ya existe el mail designado para usuario, verifique sus datos"); </script>
				';
    }else{ */
        mysqli_query($link,"INSERT INTO usuarios VALUES(NULL,'$name','$email','$pass','0')");

    /* } */
    ?>