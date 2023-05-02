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
          <a href="/" class="logo nav-link">BeautyCoShop </a>
  
          <button class="nav-toggle" aria-label="Abrir menú">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="40"
            viewBox="0 0 24 24"
          >
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
                <a href="login.html" class="nav-link">
                  <img src="../assets/usuario.png" class="icon" alt="user" />
                </a>
              </li>
              <!-- <li class="nav-menu-item">
                <a href="#" class="nav-menu-link nav-link"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-search"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                    /></svg
                ></a>
              </li>
              <li class="cart-icon nav-menu-item">
                <a href="#" class="nav-menu-link nav-link">
                  <span class="cartNumItems">Cart ()</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-cart3"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                    />
                  </svg>
                </a>
              </li> -->
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
      <div class="datos">
        <h2 class="usuario"><?php echo $_SESSION['user'];?></h2>
      </div>
      <div class="btn-acs">
        <button class="bn632-hover bn26">Carrito <img src="../assets/cart.png" class="icon2"/></button>
        <button class="bn632-hover bn26">Mis compras <img src="../assets/bolsa.png" class="icon2"/></button>
        <button class="bn632-hover bn28" onclick="location.href='../account/exit.php'">Cerrar sesion</button>
      </div>
    
      <script src="../js/mobileBtn.js"></script>
      <!-- <script src="../js/regex.js"></script> -->
      
</body>
</html>