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

	<title>Consultas -Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-sun'></i>
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
			<li class="active">
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
			<!-- <a href="#" class="nav-link">Categories</a>
			
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label> -->
			
			<a href="./admin.php" class="profile">
				<img src="../assets/administrador.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Consultas</h1>
					
				</div>
			</div>

			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Consultas agendadas</h3>
			
					</div>
					<table>
						<thead>
							<tr>
								<th>Nombre</th>
                                <th>Fecha</th>
                                <th>Detalles</th>
                                
								
                                
							</tr>
						</thead>
						<tbody>
                            <?php
                                $query = $link-> query("SELECT * FROM consulta INNER JOIN usuarios ON consulta.id_usuario = usuarios.id_usuario WHERE estatus != 'Ninguno'");
                                while($row = mysqli_fetch_array($query)){
                            ?>
							<tr>
								<td>
									<!-- <img src="img/people.png"> -->
									<p><?php echo $row['usuario']?></p>
								</td>
								<td><?php echo $row['correo']?></td>
								<td><span class="status completed"><a href="./detalles-consulta.php?id_consulta=<?php echo $row['id_consulta'];?>">Detalles</a></span></td>
                                
							</tr>
                            <?php } ?>
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