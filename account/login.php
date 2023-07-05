<!DOCTYPE html>
<?php
  include('../helpers/validate.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="../assets/logo.png"/>

    <link rel="stylesheet" href="../css/estilos-generales.css?v=2">
    <link rel="stylesheet" href="../css/estilos-account.css?v=2">
    <link rel="stylesheet" href="../index.css?v=2">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">

    <script
    src="https://kit.fontawesome.com/7e5b2d153f.js"
    crossorigin="anonymous"
  ></script>
    <title>Inicio de sesión</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
          <a href="../index.php" class="logo nav-link-ss"><h2 style="font-family: 'Playfair', serif;font-size:1.5rem;">Universodetupiel</h2></a>
  
          <button class="nav-toggle" aria-label="Abrir menú">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="40"
            viewBox="0 0 24 24"
          >
            <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
          </svg>
          </button>
          <div class="navbar-main">
            <ul class="nav-menu">
              <li class="nav-menu-item-ss">
                <a href="../index.php" class="nav-menu-link-ss nav-link-ss"
                  >Inicio</a
                >
              </li>
              <li class="nav-menu-item-ss">
                <a href="../consulta.php" class="nav-menu-link-ss nav-link-ss"
                  >Consulta</a
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

      
      <section class="account">
        <div class="overlay"></div>
        <img src="../img/110.jpg" alt="">

        <div class="accountContent container">
        
          <div class="login-html">
            
             <input  type="radio" name="tab" class="sign-in " checked><label  class="tab"><a href="login.php" style="color:white;">Identificarme</a></label>
             <input  type="radio" name="tab" class="sign-up "><label  class="tab"><a href="signup.php" style="color:white;">Registrarme</a></label>
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
                      <!-- <div class="foot-lnk">
                          <a href="#forgot">Olvide mi contraseña</a>
                      </div> -->
                  </div>
                </form>
              </div>
          </div>
     
      </section>  
    
      <script src="../js/mobileBtn.js"></script>
      
      
</body>
</html>