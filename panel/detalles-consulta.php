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

	<title>Consultas -Panel</title>
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
			<li>
				<a href="./pedidos.php">
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
						<h3>Detalles de consulta</h3>
			
					</div>
					<?php 
                    $consulta = $_GET['id_consulta'];
                    $query = mysqli_query($link,"SELECT * FROM consulta INNER JOIN usuarios ON consulta.id_usuario = usuarios.id_usuario WHERE id_consulta = $consulta");
                    $row = mysqli_fetch_array($query);
                    ?>
                    <div class="consulta">
                        <img src="../assets/identificaciones/<?php echo $row['identificacion']?>" style="width:220px; heigth:170px">
                        
                        <p><strong>Correo:</strong><?php echo $row['correo']?></p>
                        <p><strong>Edad:</strong><?php echo $row['edad']?></p>
                        <p><strong>Telefono:</strong><?php echo $row['telefono']?></p>
                        <p><strong>Enfermedades:</strong><?php echo $row['enfermedades']?></p>
                        <p><strong>Medicamentos:</strong><?php echo $row['medicamentos']?></p>
                        <p><strong>Antecedentes:</strong><?php echo $row['antecedentes']?></p>
                        <p><strong>Alergias:</strong><?php echo $row['alergias']?></p>
                        <p><strong>Motivo:</strong><?php echo $row['motivo']?></p>
                        <p><strong>Tratamiento:</strong><?php echo $row['tratamiento']?></p>
                        <p><strong>Vacunas:</strong><?php echo $row['vacuna']?></p>
                        <p><strong>Cita:</strong><?php echo $row['cita']?></p>
                        
                        <button onclick="location.href='./consultas.php'" style="padding:1rem;font-weight:bold;border:none;border-radius:0.7rem;background:#3B71CA; color:white;cursor:pointer">Regresar</button>
                        <button onclick="location.href='../admin/delete-consulta.php?id_consulta=<?php echo $row['id_consulta']?>'" style="padding:1rem; font-weight:bold;border:none;border-radius:0.7rem;background:#DC4C64; cursor:pointer;color:white">Eliminar</button>
                        <style>.consulta{display:flex;align-items:center;justify-content:center;flex-direction:column} .consulta *{margin-top:1rem}</style>

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