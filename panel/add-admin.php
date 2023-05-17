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
	<link rel="stylesheet" href="style.css?v=2">

	<title>Agregar administrador</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<i class='bx bxs-sun'></i>
			<span class="text">Universodetupiel</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
                <!-- <a href="../panel/add-admin.php" class="btn-download">
					<i class='bx bxs-user-plus' ></i>
					<span class="text">Registrar nuevo administrador</span>
				</a> -->

		
			</div><!-- Head title -->


            	

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Nuevo administrador</h3>
			
					</div>
                    <form class="admin-form" method="POST" action="../admin/add-admin.php">
                        <div class="type">
                            <label for="name">Nombre:</label>
					        <input type="text" name="name"/>
                        </div>
                        <div class="type">
                            <label for="email">Correo:</label>
					        <input type="text" name="email"/>
                        </div>
                        <div class="type">
                            <label for="password">Contraseña:</label>
					        <input type="password" name="password" id="password"/>
                        </div>
                        <button type="button" class="show" onclick='mostrarContrasena()'><i class='bx bx-show'></i></button>

                        <button  class="send">Registrar</button>
                    </form>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
    <script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>
    
</body>
</html>