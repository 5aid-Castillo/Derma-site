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
          <!-- <i class="fas fa-bars"></i> -->
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
              <a href="../index.php#contacto" class="nav-menu-link-ss nav-link-ss"
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
              <a href="../redes.php" class="nav-menu-link-ss nav-link-ss"
                >Redes Sociales</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="../tienda.php" class="nav-menu-link-ss nav-link-ss">Tienda</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="../account/account.php" class="nav-link-ss">
                <img src="../assets/usuario.png" class="icon" alt="user" />
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
      <?php
            include('../db/connect_db.php');
            session_start();
            if(@!$_SESSION['user']){
                echo("<script>location.href = 'login.php';</script>");
            }
      ?>
      <div class="det">
         <h2>Detalles de cuenta</h2>
      </div>
      <div class="datos">
        
        <p class="usuario">Cuenta:<strong> <?php echo $_SESSION['user'];?></strong></p>
      </div>
      <div class="btn-acs">
        <button class="bn632-hover bn26" onclick="location.href='./cart.php'">Carrito <img src="../assets/cart.png" class="icon2"/></button>
        <button class="bn632-hover bn26">Mis compras <img src="../assets/bolsa.png" class="icon2"/></button>
        <button class="bn632-hover bn28" onclick="location.href='../account/exit.php'">Cerrar sesion</button>
      </div>
    
      <script src="../js/mobileBtn.js"></script>
      <!-- <script src="../js/regex.js"></script> -->
      
</body>
</html>