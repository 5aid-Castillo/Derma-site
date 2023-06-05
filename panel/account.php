<!DOCTYPE html>
<?php 
include('../db/connect_db.php');
session_start();
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

	<title>Editar Cuenta</title>
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

		<?php 
					$sql = mysqli_query($link,"SELECT * FROM cuenta");
					$data = mysqli_fetch_array($sql);
					?>	
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Cuenta</h1>
					
				</div>
				 <a href="./edit-account.php" class="btn-download">
					<i class='bx bxs-edit-alt' ></i>
					<span class="text">Editar cuenta</span>
				</a>  
			</div>

		


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Mi cuenta</h3>
						
					</div>

					<div class="detalles">
                        <style>.detalles{display:flex;align-items:center;justify-content:center; flex-direction:column}</style>
                  
					
					<div class="data">
						<p><strong>Cuenta:</strong><?php echo $data['cuenta']?></p>
					</div>
					<div class="data">
						<p><strong>Titular:</strong><?php echo $data['titular']?></p>
					</div>
					<div class="data">
						<p><strong>Banco:</strong><?php echo $data['banco']?></p>
					</div>
					
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