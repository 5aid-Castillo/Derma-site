<!DOCTYPE html>
<?php 
include('../db/connect_db.php');
session_start();
if(@!$_SESSION['user']){
  echo("<script>location.href = 'login.php';</script>");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/logo.png"/>
    <link rel="stylesheet" href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilos-generales.css?v=2">
    <link rel="stylesheet" href="../css/estilos-account.css?v=2">
    <link rel="stylesheet" href="../css/estilos-carrito.css?v=2">
    <link rel="stylesheet" href="../index.css?v=2">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,600&display=swap" rel="stylesheet">

    <title>Pedidos</title>
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
              <a href="./account.php" class="nav-link-ss">
                <img src="../assets/usuario.png" class="icon" alt="user" />
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


  <section class="tabla-carrito" >
  <div class="table-responsive-lg "> 
  <table class="table table-striped  mt-5 p-2">
  <thead class="table-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      
    </tr>
  </thead>
  <tbody>
    
    <?php       
            $id_user = $_SESSION['idu']; 
            
            $query = mysqli_query($link,"SELECT * FROM productos INNER JOIN pedido ON productos.id_producto = pedido.id_producto WHERE pedido.id_usuario = $id_user");

            while($row = mysqli_fetch_array($query)){
        
            
            /* $subtotal = $subtotal_cart * $cantidad; */
 
           
      ?>
            
 
     
    <tr>
      <th scope="row"><img src="../img/products/<?php echo $row['imagen']?>" alt="" style="width:35px; height:35px"></th>
      <td ><?php echo $row['producto']?></td>
      <td ><?php echo $row['cantidad'];?></td>
    </tr> 
    
 



        <?php }?>

        </tbody>
</table>
            </div>

  </section>


  <div class="chat">
      <a
        href="https://wa.me/522212193377?text=Hola!%20quiero%20saber%20más%20sobre%20sus%20servicios."
        class="btn-wsp"
        target="_blank"
      >
        <i class="fa fa-whatsapp icono"></i>
      </a>
    </div>
   
  
            
    
      <script src="../js/mobileBtn.js"></script>
      
      <script src="../css/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>