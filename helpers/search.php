<?php 
    include('../db/connect_db.php');
    session_start();
    if(!isset($_GET['texto'])){
        echo("<script>location.href = '../index.php';</script>");
	}
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../assets/logo.png"/>
    <link rel="stylesheet" href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/estilos-generales.css?v=2" />
    <link rel="stylesheet" href="../css/estilos-main.css?v=2" />
    <link rel="stylesheet" href="../css/stylesTienda.css?v2" />
    <link rel="stylesheet" href="../index.css?v=2" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">

    <title>Tienda</title>
  </head>
  <body>
  <header class="header">
      <nav class="nav">
      <a href="/" class="logo nav-link-ss"><h2 style="font-family: 'Playfair', serif;font-size:1.5rem;">Universodetupiel</h2></a>

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

    <section class="banner">
      <h2 class="title">Tienda</h2>
    </section>

     <section class="productos"> 
      
      <!-- searchbox -->
      <div class="search">
       <form class="searchbox" action="search.php" method="GET">
        <input type="search" placeholder="Buscar" name="texto"/>
        <button type="submit" value="search">&nbsp;</button>
      </form>
    </div>

    
    </section>



    <section class="products section container">
        <div class="mainContent grid">

        <?php 
            $result = $link-> query("SELECT * FROM productos WHERE 
                    producto like '%".$_GET['texto']."%' or 
                    descripcion like '%".$_GET['texto']."%' or 
                    resumen like '%".$_GET['texto']."%' 
                    ORDER BY id_producto DESC limit 20") or die ($link -> error);
             if($result->num_rows > 0){      
            
            while( $row = mysqli_fetch_array($result)){
              
              
          ?>
          <div class="single-product">
              <div class="prodImage">
                <a href="<?php  echo $row['id_producto']?>"><img src="../img/products/<?php echo $row['imagen']?>" alt="<?php echo $row['producto']; ?>" alt="<?php echo $row['producto']; ?>"></a>
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
                  <button class="detalles-btn">Detalles</button>
                </div>
              </div>
         </div>

            <?php   
            }
          }else{
            ?>
                <div class="sin">
           <div class="alert alert-dark text-center m-5" role="alert">
           Sin resultados encontrados.
            </div>
          </div>
          <style>.sin{display:flex;align-items:center;justify-content:center;}</style>
             
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

   <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../js/mobileBtn.js"></script>
    

  </body>
</html>
