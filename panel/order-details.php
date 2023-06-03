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

	<title>Pedidos -Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-sun'></i>
			<span class="text">U</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="./index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li class="active">
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
			<li>
				<a href="./productos.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Mis Productos</span>
				</a>
			</li>
			<li>
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
			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h4>Detalles de envio</h4>

					</div>
					<?php 
                    $pedido = $_GET['id_pedido'];
                    
                    $query = mysqli_query($link,"SELECT * FROM pedido INNER JOIN productos ON 
                    pedido.id_producto = productos.id_producto WHERE id_pedido = $pedido");

                    while($row = mysqli_fetch_array($query)){
                    ?>
                        
                    <div class="details-container-1">
                        <div class="details-container-item">
                            <p><strong>Producto:</strong>&nbsp;<?php echo $row['producto'];?></p>
                        </div>
                        <div class="details-container-item">
                            <p style="color:green"><strong style="color:black">Precio:</strong>&nbsp;$<?php echo $row['precio']?></p>
                        </div>
                        <div class="details-container-item">
                            <?php if($row['promocion'] > 0){?>
                            <p style="color:orangered"><strong style="color:black">Promoción:</strong>&nbsp;<?php echo $row['promocion']?>%</p>
                            <?php }else{?>
                            <p><strong>Promoción:</strong>&nbsp;Sin promocion</p>
                            <?php }?>
                        </div>
                        <div class="details-container-item">
                            <p><strong>Cantidad:</strong>&nbsp;<?php echo $row['cantidad']?></p>
                        </div>
                        <div class="details-container-item">
                            <p><strong>Fecha:</strong>&nbsp;<?php echo $row['fecha']?></p>
                        </div>
                        <div class="details-container-item">
                            <p><strong>Metodo de pago:</strong>&nbsp; <?php echo $row['metodo']?></p>
                        </div>
                        
                    </div>
                    <?php }?>
                    <div class="btn-choose">
                    <button class="btn-r" onclick="location.href='./order.php?id=<?php echo $_GET['id_pedido']?>'">Regresar</button>
                    <button class="btn-r" style="margin-top:3rem;background: #d9534f!important;" onclick="location.href='../admin/delete-order.php?id=<?php echo $_GET['id_pedido']?>'">Eliminar</button>
								
				</div>
                    <style>
                        .details-container-1,.details-container-item,.btn-choose{
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            flex-direction:column;
                        }
                        .details-container-item{
                            margin:1rem 0;
                        }
                        .btn-r{
                            padding:1rem;
                            background:#0275d8;
                            color:white;
                            border:0;
                            border-radius: 0.7rem;
                            cursor: pointer;
                        }
                    </style>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>