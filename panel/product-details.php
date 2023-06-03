<!DOCTYPE html>
<?php 
session_start();
include('../db/connect_db.php');
if(@!$_SESSION['admin']){
    echo("<script>location.href = '../index.php';</script>");
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../assets/logo.png"/>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Productos -Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">U</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="./index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li>
				<a href="./pedidos.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Pedidos</span>
				</a>
			</li>
			<li>
				<a href="./consultas.php">
					<i class='bx bxs-user-voice' ></i>
					<span class="text">Consultas</span>
				</a>
			</li>
			<li class="active">
				<a href="./productos.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Mis Productos</span>
				</a>
			</li>
			
			<li >
				<a href="./message.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Mensajes</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="../admin/exit.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Salir</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			<a href="./admin.php" class="profile">
				<img src="../assets/administrador.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Detalles de producto</h1>
					
				</div>
				 <!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Agregar nuevo producto</span>
				</a>  -->
			</div>

		


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Detalles</h3>
						
					</div>

					<div class="detalles">
                        <style>.detalles{display:flex;align-items:center;justify-content:center; flex-direction:column}</style>
                        <?php 
                        if(isset($_GET['id_producto'])){
                            $producto=$_GET['id_producto'];
                            
                            $query = mysqli_query($link,"SELECT * FROM productos WHERE id_producto = $producto");
                            $row = mysqli_fetch_array($query);
                            ?>
						 
                         <img src="../img/products/<?php echo $row['imagen']?>" alt="imagen" style="width:200px; heigth:200px">   
                         <h4><strong>Producto:</strong><?php echo $row['producto']?></h4>
                         <p><strong>Descripción:</strong><?php echo $row['descripcion']?></p>
                         <p><strong>Resumen:</strong><?php echo $row['resumen']?></p>
                         <p style="color:green"><strong style="color:black">Precio:</strong>$<?php echo $row['precio']?></p>
                         <p><strong>Categoria: </strong><?php echo $row['categoria']?></p>
                         <p><strong>Promoción: </strong><?php echo $row['promocion']?></p>
                         <p><strong>Cantidad: </strong><?php echo $row['porcion']; $row['tipo']?></p>
                         <p><strong>Recomendaciones:</strong><?php echo $row['recomendaciones']?></p>
                         <p><strong>Inventario: </strong><?php echo $row['stock']?></p>
                         <div class="btns-details">
                         <button type="button" class="btn-edit" onclick="location.href='./edit-product.php?id_producto=<?php echo $row['id_producto']?>'"><strong>Editar</strong></button>
                         <button type="button" class="btn-delete" onclick="location.href='./delete-product.php?id_producto=<?php echo $row['id_producto'];?>'"><strong>Eliminar</strong></button>
                         </div>
                         <style>.btn-edit{padding:0.7rem;background:#FFC107;border-radius:0.7rem;border:none;cursor: pointer;}.btn-delete{padding:0.7rem;border:none;background:#df4759;border-radius:0.7rem;cursor:pointer;}</style>
                        <?php     
                        }
                        ?>
                    </div>
					
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
   
</body>
</html>