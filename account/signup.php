<?php 
if(isset($_POST['sign__up'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_r = $_POST['pass-r'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/estilos-generales.css?v=2">
    <link rel="stylesheet" href="../css/estilos-account.css?v=2">
    <link rel="stylesheet" href="../index.css?v=2">
    <script
    src="https://kit.fontawesome.com/7e5b2d153f.js"
    crossorigin="anonymous"
  ></script>
    <title>Cuenta -BeautyCoShop</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
          <a href="/" class="logo nav-link-ss">BeautyCoShop </a>
  
          <button class="nav-toggle" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
          </button>
          <div class="navbar-main">
            <ul class="nav-menu">
              <li class="nav-menu-item-ss">
                <a href="../index.php" class="nav-menu-link-ss nav-link-ss"
                  >Inicio</a
                >
              </li>
              <li class="nav-menu-item-ss">
                <a href="../index.php#contacto" class="nav-menu-link-ss nav-link-ss"
                  >Contacto</a
                >
              </li>
           
              <li class="nav-menu-item-ss">
                <a href="../index.php#about" class="nav-menu-link-ss nav-link-ss"
                  >Nosotros</a
                >
              </li>
              <li class="nav-menu-item-ss">
                <a href="../redes.php" class="nav-menu-link-ss nav-link-ss">Redes Sociales</a>
              </li>
              <li class="nav-menu-item-ss">
                <a href="../tienda.php" class="nav-menu-link-ss nav-link-ss">Tienda</a>
              </li>
              <li class="nav-menu-item-ss">
                <a href="account.php" class="nav-link-ss">
                  <img src="../assets/usuario.png" class="icon" alt="user" />
                </a>
              </li>
             
            </ul>
          </div>
        </nav>
      </header>

      <!-- Condicional IF si no tiene cuenta, mostrar esto: -->
      <section class="account">
        <div class="overlay"></div>
        <img src="../img/110.jpg" alt="">

        <div class="accountContent container">
        
          <div class="login-html">
              <input  type="radio" name="tab" class="sign-in" ><label  class="tab"><a href="login.php" style="color:white;">Identificarme</a></label>
              <input  type="radio" name="tab" class="sign-up" checked><label class="tab"><a href="signup.php" style="color:white;">Regitrarme</a></label>
              <div class="login-form">
                  
                  <form method="POST" id="form-signup">
                  <div class="sign-up-htm">
                      <div class="group">
                          <label for="user" class="label">Nombre</label>
                          <input id="name" name="name" type="text" value="<?php if(isset($name)) echo $name?>" class="input" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"  required>
                      </div>
                      <div class="group">
                          <label for="pass" class="label">Correo electronico</label>
                          <input id="email" name="email" type="text" value="<?php if(isset($email)) echo $email?>"  class="input" required>
                      </div>
                      <div class="group">
                          <label for="pass" class="label">Contraseña</label>
                          <input id="pass" name="pass" type="password" value ="<?php if(isset($pass)) echo $pass?>" class="input" data-type="password" required>
                        </div>
                      <div class="group">
                          <label for="pass" class="label">Repetir Contraseña</label>
                          <input id="pass-r" name="pass-r" type="password" value ="<?php if(isset($pass)) echo $pass_r?>" class="input" data-type="password" required>
                      </div>
                      
                      <p class="warnings" id="warnings">
                        
                        <?php 
                            include('../helpers/sign_up.php');
                        ?>
                      </p>

                      <div class="group">
                          <input type="submit" class="button" name="sign__up" value="Registrar">
                      </div>
                      <div class="hr"></div>
                      <div class="foot-lnk">
                          <label>Ya tengo una cuenta</a>
                      </div>
                  </div>
                  </form>
              </div>
          </div>
     
      </section> 
      <!-- Else si tiene una cuenta mostrar esto:  -->

      <script src="../js/mobileBtn.js"></script>
      <!-- <script src="../js/regex.js"></script> -->
      
</body>
</html>