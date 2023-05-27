<!DOCTYPE html>
<?php
 include('db/connect_db.php');
 session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilos-generales.css?v=2" />
    <link rel="stylesheet" href="css/estilos-consulta.css?v=2" />
    <link rel="stylesheet" href="css/estilos-main.css?v=2" />
   
    <link rel="stylesheet" href="./index.css?v=2" />
    
    <title>Tienda</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <a href="/" class="logo nav-link-ss">MxSkinCare </a>

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
              <a href="index.php" class="nav-menu-link-ss nav-link-ss"
                >Inicio</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="./consulta.php" class="nav-menu-link-ss nav-link-ss"
                >Consultas</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="index.php#contacto" class="nav-menu-link-ss nav-link-ss"
                >Contacto</a
              >
            </li>
           
            <li class="nav-menu-item-ss">
              <a href="index.php#about" class="nav-menu-link-ss nav-link-ss"
                >Nosotros</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="redes.php" class="nav-menu-link-ss nav-link-ss"
                >Redes Sociales</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="tienda.php" class="nav-menu-link-ss nav-link-ss">Tienda</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="account/account.php" class="nav-link-ss">
                <img src="./assets/usuario.png" class="icon" alt="user" />
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    
    <section class="consulta">
         <h2 align="center">Consulta</h2>

         <h4 align="center">Realiza tu registro para obtener una consulta en linea o agendar tu cita de manera presencial</h4>
         <p align="center"><strong>Nota:</strong> Para acceder al registro de consulta en linea debes registrar una cuenta de usuario o acceder a una: <a style="color:orangered;font-weight:bold" href="account/account.php">Aqui</a></p>
         
         <div class="btn-r" >
           <button class="button-rgs" onclick="location.href='./helpers/validate2.php'">Consulta en Linea</button>
           <button class="button-rgs" onclick="location.href='pages/presencial.php'">Consulta Presencial</button>
         </div>
    </section>

    <div class="banner-cons">
        <div class="overlay"></div>
        <img src="./img/101.jpg" alt="Green">
        <div class="bannerContent container">
            <div class="bannerText">
                <h1 class="title-r">Es tiempo de cuidar de tu piel</h1>
            </div>
        </div>
    </div>
    
    <!-- WhatsApp -->

    <div class="chat">
      <a
        href="https://wa.me/522212193377?text=Hola!%20quisiera%20saber%20más%20sobre%20las%20consultas%20en%20linea."
        class="btn-wsp"
        target="_blank"
      >
        <i class="fa fa-whatsapp icono"></i>
      </a>
    </div>

    <!-- <script src="js/navEffects.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    <!-- <script src="js/appTienda.js"></script> -->
    <script src="js/mobileBtn.js"></script>
    
   <!--  <script src="js/carrito.js"></script> -->

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>