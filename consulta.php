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
    <link rel="icon" type="image/png" href="./assets/logo.png"/>
    
    <link rel="stylesheet" href="css/estilos-generales.css?v=2" />
    <link rel="stylesheet" href="css/estilos-consulta.css?v=2" />
    <link rel="stylesheet" href="css/estilos-main.css?v=2" />
   
    <link rel="stylesheet" href="./index.css?v=2" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">
    
    <title>Consulta</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <a href="./index.php" class="logo nav-link-ss"><h2 style="font-family: 'Playfair', serif;font-size:1.5rem;">Universodetupiel</h2></a>

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
                >Consulta</a
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
         <p align="center" style="color:green"><strong style="color:black">Precio de consulta:&nbsp;</strong>$700</p>
         
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

   
    <script src="js/mobileBtn.js"></script>
    
   
  </body>
</html>