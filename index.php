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
    <link rel="shortcut icon" href="/assets/peladura.png" />
    <link rel="stylesheet" href="css/estilos-generales.css?v=2" />
    <!-- <link rel="stylesheet" href="css/estilos-landing.css" /> -->
    <link rel="stylesheet" href="css/estilos-main.css?v=2" />
    <link rel="stylesheet" href="./index.css?v=2" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   
    <title>BeautyCoShop</title>
  </head>
  <body>
    <!-- <div class="blur"></div> -->
    <!-- Inicio de barra de navegacion -->
    <header class="header">
      <nav class="nav">
        <a href="/" class="logo nav-link-ss">Beauty </a>

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
              <a href="index.html#contacto" class="nav-menu-link-ss nav-link-ss"
                >Contacto</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="galeria.html" class="nav-menu-link-ss nav-link-ss">Galería</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="index.html#about" class="nav-menu-link-ss nav-link-ss"
                >Nosotros</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="redes.html" class="nav-menu-link-ss nav-link-ss"
                >Redes Sociales</a
              >
            </li>
            <li class="nav-menu-item-ss">
              <a href="tienda.php" class="nav-menu-link-ss nav-link-ss">Tienda</a>
            </li>
            <li class="nav-menu-item-ss">
              <a href="./account/account.php" class="nav-link-ss">
                <img src="./assets/usuario.png" class="icon" alt="user" />
              </a>
            </li>
           
          </ul>
        </div>
      </nav>
    </header>
      
    <section class="section main">
      <div class="title">
        <h1
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-center"
          data-aos-duration="3000"
        >
          Productos
        </h1>
        <hr />
        <div class="p-1">
          <p
            data-aos="fade-up"
            data-aos-anchor-placement="center-center"
            data-aos-duration="3000"
          >
            Encuentra productos para el cuidado de la piel, pero si busca
            respuesta sobre el cuidado de su piel, consulta a un especialista
          </p>
          <button
            class="button-p"
            role="button"
            data-aos="fade-up"
            data-aos-anchor-placement="center-center"
            data-aos-duration="3000"
            onclick="location.href='consulta.php'"
          >
            ¡Consultar Aquí!
          </button>
        </div>
      </div>
      <img
        data-aos="fade-up"
        data-aos-duration="3000"
        src="./img/imgs-landing/banner-landing.jpg"
        alt="landing"
      />
    </section>

    <section class="section full-lg-screen">
      <div class="popular">
        <article class="care">
          <p data-aos="fade-up" data-aos-duration="3000">Productos Populares</p>
        </article>
        <article class="care1">
          <p data-aos="fade-up" data-aos-duration="3000">
            ¡Cuidado también es salud y belleza!
          </p>
        </article>
      </div>
      <div class="popular-img">
        <div class="img-2">
          <img
            src="./img/cosmetics2.jpeg"
            alt=""
            data-aos="fade-up"
            data-aos-duration="3000"
          />
          <img
            src="./img/111.jpg"
            alt=""
            data-aos="fade-up"
            data-aos-duration="3000"
          />
        </div>
        <div class="img-2">
          <img
            src="./img/cosmetic.jpg"
            alt=""
            data-aos="fade-up"
            data-aos-duration="3000"
          />
          <img
            src="./img/cosm.jpg"
            alt=""
            data-aos="fade-up"
            data-aos-duration="3000"
          />
        </div>
      </div>
      <center class="btn-go">
        <button class="button-go" onclick="location.href='tienda.php'">Ver productos</button>
      </center>
    </section>

    <section class="section" id="about">
      <div class="about">
        <article class="about-us">
          <h2 data-aos="fade-up" data-aos-duration="3000">
            Acerca de nosotros
          </h2>
          <p>
            Tienda especializada en ofrecer productos dermatológicos enfocados
            a:
          </p>
          <ul>
            <li>-Pieles con acné.</li>
            <li>-Pieles con manchas.</li>
            <li>-Pieles con cicatrices.</li>
            <li>-Pieles con celulitis.</li>
          </ul>
        </article>
        <article class="about-img">
          <img
            src="./img/imgs-landing/medic.svg"
            alt="medic"
            data-aos="fade-up"
            data-aos-duration="3000"
          />
        </article>
      </div>
    </section>

    <section class="section">
      <div class="ethical">
        <h2 data-aos="fade-up" data-aos-duration="3000">Nuestros valores</h2>
        <div class="pad" data-aos="fade-up" data-aos-duration="3000">
          <img src="./assets/corazon.png" class="icon" alt="health" />
          <h4>Profesionalismo</h4>
          <p>
            Los productos ofrecidos en está tienda son seleccionados
            cuidadosamente por profesionales de la salud con el propósito de
            ofrecerte resultados esperados
          </p>
        </div>
        <div class="pad" data-aos="fade-up" data-aos-duration="3000">
          <img src="./assets/honestidad.png" class="icon" alt="" />
          <h4>Honestidad</h4>
          <p>
            Los productos ofrecidos en esta tienda son adquiridos directamente
            con la marca, por lo tanto, no hay intermediarios, en consecuencia
            tenemos la seguridad de ofrecer lo que anunciamos.
          </p>
        </div>
        <div class="pad" data-aos="fade-up" data-aos-duration="3000">
          <img src="./assets/comprobado.png" class="icon" alt="" />
          <h4>Compromiso</h4>
          <p>
            Los productos en esta tienda se ofertan a quien ya está con un
            tratamiento dermatológico, sin embargo, si tienes dudas sobre ellos,
            nuestro equipo de profesionales de la salud siempre están dispuestos
            a ayudar y orientar.
          </p>
        </div>
      </div>
    </section>

    <section class="section form" id="contacto">
      <div class="contact">
        <h2>Contáctenos</h2>
        <p>
          Siéntase libre de escribirnos cualquier duda que tenga sobre nuestros
          productos.
        </p>
      </div>
      <div class="contact-form box-shadow-1">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Nombre"
          title="Nombre solo acepta letras y espacios en blanco"
          pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
          required
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="correo@ejemplo.com"
          title="Email Incorrecto"
          pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$"
        />
        <textarea
          name="comments"
          id="comments"
          cols="50"
          rows="10"
          placeholder="Comentarios"
          required
        ></textarea>
        
        
        <input type="submit" href="javascript:;" onclick="send($('#name').val(),$('#email').val(),$('#comments').val());return false;" class="send" id="send" name="send" value="Enviar" />
        <div id="resultado"></div>
</div>
        </div>

      </article>
    </section>

    <!-- WhatsApp -->

    <div class="chat">
      <a
        href="https://api.whatsapp.com/send?phone=+51987654321"
        class="btn-wsp"
        target="_blank"
      >
        <i class="fa fa-whatsapp icono"></i>
      </a>
    </div>
    <!-- 
    <footer class="footer">
      <p>
        Copyright Ⓒ 2023 Brand name | Sitio desarrollado por
        <a href="#">5aid Web Developer</a>
      </p>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- AOS JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
   
    <!-- Initialize Swiper -->
    <script>
      AOS.init();
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 40,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>
    <script src="js/mobileBtn.js"></script>
    <script src="js/contacto.js"></script>

    
  </body>
</html>
