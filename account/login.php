<!DOCTYPE html>
<?php
  include('../helpers/validate.php');
?>
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
          <a href="/" class="logo nav-link">BeautyCoShop </a>
  
          <button class="nav-toggle" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
          </button>
          <div class="navbar">
            <ul class="nav-menu">
              <li class="nav-menu-item">
                <a href="../index.html#contacto" class="nav-menu-link nav-link"
                  >Contacto</a
                >
              </li>
              <li class="nav-menu-item">
                <a href="../galeria.html" class="nav-menu-link nav-link">Galería</a>
              </li>
              <li class="nav-menu-item">
                <a href="../index.html#about" class="nav-menu-link nav-link"
                  >Nosotros</a
                >
              </li>
              <li class="nav-menu-item">
                <a href="#" class="nav-menu-link nav-link">Redes Sociales</a>
              </li>
              <li class="nav-menu-item">
                <a href="../tienda.html" class="nav-menu-link nav-link">Tienda</a>
              </li>
              <li class="nav-menu-item">
                <a href="account.php" class="nav-link">
                  <img src="../assets/usuario.png" class="icon" alt="user" />
                </a>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>

      
      <section class="account">
        <div class="overlay"></div>
        <img src="../img/110.jpg" alt="">

        <div class="accountContent container">
        
          <div class="login-html">
            
             <input  type="radio" name="tab" class="sign-in " checked><label  class="tab"><a href="login.php" style="color:white;">Identificarme</a></label>
             <input  type="radio" name="tab" class="sign-up "><label  class="tab"><a href="signup.php" style="color:white;">Regitrarme</a></label>
              <div class="login-form">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                  <div class="sign-in-htm">
                      <div class="group">
                          <label for="user-l" class="label">Correo</label>
                          <input id="user-l" name="user-l" type="text" value="<?php if(isset($email_l)) echo $email_l?>" class="input" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required>
                      </div>
                      <div class="group">
                          <label for="passwd" class="label">Contraseña</label>
                          <input id="passwd" name="passwd" type="password" class="input" data-type="password" required>
                      </div>
                      <p class="warnings" id="warnings">
                        <?php 
                         echo $password_err;
                         echo $email_err;
                        ?>
                          
                      </p>
                      <div class="group">
                          <input type="submit" class="button" name="log" id="log" value="Iniciar" >
                      </div>
                      <div class="hr"></div>
                      <div class="foot-lnk">
                          <a href="#forgot">Olvide mi contraseña</a>
                      </div>
                  </div>
                </form>
              </div>
          </div>
     
      </section>  
    

      <script src="../js/mobileBtn.js"></script>
      <!-- <script src="../js/regex.js"></script> -->
      
</body>
</html>