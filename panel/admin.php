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

	<title>Configuracion -Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-sun'></i>
			<span class="text">U</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
		
			
			<a href="./admin.php" class="profile">
				<img src="../assets/administrador.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Administrador</h1>
					
				</div>
                <a href="../panel/add-admin.php" class="btn-download">
					<i class='bx bxs-user-plus' ></i>
					<span class="text">Agregar administrador</span>
				</a>

		
			</div><!-- Head title -->


            	

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Perfiles de administrador</h3>
			
					</div>
					<table>
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Correo</th>
                                <th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                                $query = $link-> query("SELECT * FROM usuarios WHERE roll = '1'") or die($link->error);
                                while($row = mysqli_fetch_array($query)){
                            ?>
							<tr>
								<td>
									<!-- <img src="img/people.png"> -->
									<p><?php echo $row['usuario']?></p>
								</td>
								<td><?php echo $row['correo']?></td>
								
                                <td><a href="../admin/delete-admin.php?id_admin=<?php echo $row['id_usuario']?>"><img src="../assets/marca-x.png" alt="eliminar" style="width:20px; height:20px;"/></a></td>
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