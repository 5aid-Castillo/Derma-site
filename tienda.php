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
    <link rel="stylesheet" href="css/estilos-main.css?v=2" />
    <link rel="stylesheet" href="css/stylesTienda.css?v2" />
    <link rel="stylesheet" href="./index.css?v=2" />
   
    <title>Tienda</title>
  </head>
  <body>
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
    
    <section class="banner">
      <h2 class="title">Tienda</h2>
      
    </section>

     <section class="productos"> 
      
      <!-- searchbox -->
      <div class="search">
       <form class="searchbox" action="./helpers/search.php" method="GET">
        <input type="search" placeholder="Buscar" name="texto"/>
        <button type="submit" value="search">&nbsp;</button>
      </form>
    </div>

    <!-- Filter -->
      
      <!--   <div class="select" tabindex="1">
          <input class="selectopt" name="test" type="radio" id="opt1" checked>
          <label for="opt1" class="option">Todo</label>
          <input class="selectopt" name="test" type="radio" id="opt2">
          <label for="opt2" class="option">Promociones</label>
          <input class="selectopt" name="test" type="radio" id="opt3">
          <label for="opt3" class="option">Nuevo</label>
       
        </div> -->
    </section>



    <section class="products section container">
        <div class="mainContent grid">

        <?php 
            $result = $link-> query("SELECT * FROM productos ORDER BY rand() LIMIT 12") or die ($link->error);
            
            while($row = mysqli_fetch_array($result)){
          ?>
          <div class="single-product">
              <div class="prodImage">
                <a href="pages/products.php?id_producto=<?php echo $row['id_producto']; ?>"><img src="./img/products/<?php echo $row['imagen']?>" alt="<?php echo $row['producto']; ?>" alt="<?php echo $row['producto']; ?>"></a>
              </div>
              <div class="prodFooter">
                <div class="descProduct">
                  <small ><?php echo $row['producto'];?></small>
                  <small style="color:grey"><?php echo $row['resumen'];?></small>
                  
                  <small <?php if($row['promocion'] > 0){?>style="color:grey;  text-decoration:line-through;"<?php }else{ ?>style="color:rgb(34, 139, 34);" <?php }?> >
                   $<?php echo $row['precio']?></small>
                  
                   <?php if($row['promocion'] > 0){ 
                      $promocion = $row['promocion'];
                      $precio = $row['precio'];
                      $subtotal = ($precio * $promocion) / 100;
                      $total = $precio - $subtotal;
                    ?>
                   <small style="color:rgb(34, 139, 34);">$<?php echo $total; ?>  <small style="color:orangered">&nbsp;&nbsp; -<?php echo $promocion?>%</small></small>
                    <?php }?>
                     
                </div>
                <div class="sourceBtn flex">
                  <button class="detalles-btn" onclick="location.href='pages/products.php?id_producto=<?php echo $row['id_producto'];?>'">Detalles</button>
                </div>
              </div>
         </div>
         <?php 
            }
            ?>

        </div>
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

   <script src="js/mobileBtn.js"></script>
    <script src="js/carrito.js"></script> 

  </body>
</html>
