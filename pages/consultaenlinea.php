<?php 
    include('../db/connect_db.php');
    session_start();   
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../account/account.php';</script>");
    }
?>
<!DOCTYPE html>

<html lang="en">
  <head>
      
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilos-generales.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-consulta.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-checkout.css?v=2" />
    <link rel="stylesheet" href="../index.css?v=2" />
    
    <title>Tienda</title>
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
    <section class='online'>
        
        <h2 align="center">Consulta en linea</h2>
        <p align="center">Para realizar tu consultar en linea, ingrese los siguentes datos para crear su ficha Clinica Dermatologica.</p>
        
   </section>
    
   <section class="checkout">
        <style>.checkout{margin-top:0rem !important;}</style>
   <form action="../helpers/datos-consulta.php" class="form-reg" method="POST" enctype="multipart/form-data">

      <h1 class="text-center">Ingresa los siguientes datos para envio de tu pedido.</h1>

      <!-- ProgressBar -->
      
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Personal"
        ></div>
        <div class="progress-step" data-title="Antecedentes"></div>
        <div class="progress-step" data-title="Consulta"></div>
        
      </div>


      <!-- Step 1 -->
      <div class="form-step form-step-active">
        <div class="input-group">
         <label for="uploaded">Foto de identificacion Oficial:</label>
         <input name="uploadedfile" id="uploadedfile" type="file" />
      </div>
      <div class="input-group">
        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad" />
      </div>
      <div class="input-group">
        <label for="telefono">Numero de telefono:</label>
        <input type="text" name="telefono" id="telefono" />
      </div>
     
      <div>
        <a href="#" class="btn-rgs btn-next width-50 ml-auto">Siguiente</a>
      </div>
    </div>

      <!-- Step 2 -->
      <div class="form-step">
        <div class="input-group">
          <label for="enfermedades">Enfermedades cronicas y actuales:</label>
          <input type="text" name="enfermedades" id="enfermedades"/>
        </div>
        <div class="input-group">
          <label for="medicamentos">Medicamentos(incluye suplementos alimenticios,vitaminas,etc.):</label>
          <input type="text" name="medicamentos" id="medicamentos" />
        </div>
        <div class="input-group">
          <label for="antecedentes">Antecedentes familiares de enfermedades:</label>
          <input type="text" name="antecedentes" id="antecedentes" />
        </div>
        <div class="input-group">
          <label for="alergias">Alergias:</label>
          <input type="text" name="alergias" id="alergias" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn-rgs btn-prev">Regresar</a>
          <a href="#" class="btn-rgs btn-next">Siguiente</a>
        </div>
      </div>

      <!-- Step 3 -->
     <div class="form-step">
       <div class="input-group">
          <label for="motivo">Motivo de consulta:</label>
          <input type="text" name="motivo" id="motivo" />
      </div>
      <div class="input-group">
          <label for="tratamiento">Tratamiento(facial o corporal):</label>
          <input type="text" name="tratamiento" id="tratamiento" />
      </div>
      <div class="input-group">
          <label for="vacuna">Fecha de vacuna(primera y segunda dosis):</label>
          <input type="text" name="vacuna" id="vacuna" />
      </div>
      <div class="input-group">
          <label for="cita">Cita(dia y hora a cordinar segun disponibilidad):</label>
          <input type="text" name="cita" id="cita" />
      </div>
      
     
      <div class="btns-group">
        <a href="#" class="btn-rgs btn-prev ">Regresar</a>
        <input type="submit" value="Enviar" name="send" class="btn-send btn-rgs"/>
      </div>
    </div>
  </form>
</section>


    <!-- WhatsApp -->

    <div class="chat">
      <a
        href="https://wa.me/522212193377?text=Hola!%20quisiera%20saber%20sobre%20sus%20consultas%20en%20linea."
        class="btn-wsp"
        target="_blank"
      >
        <i class="fa fa-whatsapp icono"></i>
      </a>
    </div>

   
   
     <script src="../js/formCheckout.js"></script>
     <script src="../js/mobileBtn.js"></script>
     <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  </body>
</html>
