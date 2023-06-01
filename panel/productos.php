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
			<span class="text">Universodetupiel</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="./index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Pedidos</span>
				</a>
			</li>
			<li>
				<a href="#">
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
			
			<a href="./index.php" class="profile">
				<img src="../assets/administrador.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Mis productos</h1>
					
				</div>
				 <a href="./add-products.php" class="btn-download" style="background: #5cb85c !important;">
					<i class='bx bxs-add-to-queue' ></i>
					<span class="text">Agregar nuevo producto</span>
				</a> 
			</div>

		


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista de productos</h3>
						
					</div>

					<table>
						<thead>
							<tr>								

								<th>Producto</th>
								<th>Categoria</th>
								<th>Detalles</th>
                                
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$query = mysqli_query($link,"SELECT * FROM productos");
							while($data = mysqli_fetch_array($query)){

							?>
						
							<tr>
								<td>
									<p><?php echo $data['producto']?></p>
								</td>
								<td>
									<p><?php echo $data['categoria']?></p>
								</td>
								<td><span class="status completed"><a href="./product-details.php?id_producto=<?php echo $data['id_producto'];?>">Detalles</a></span></td>
							</tr>
							<?php }?>
								 
							<!-- <tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr> -->
						</tbody>
					</table>
					
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
	
</body>
</html>