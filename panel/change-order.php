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
						<h3>Estatus</h3>
					</div>
					
<?php 
    $id_pedido = $_GET['id_order'];
    $query = mysqli_query($link,"SELECT * FROM pedido WHERE id_pedido = $id_pedido");
    $row = mysqli_fetch_array($query);
?>
                    

                    <form action="../admin/change-status.php?id_pedido=<?php echo $id_pedido?>" method="POST" class="order-status">
                        <select name="estatus" id="estatus">

                            <option value="<?php echo $row['status']?>"><?php echo $row['status']?></option>     
                            <option value="Pendiente">Pendiente</option>     
                            <option value="Enviado">Enviado</option>     
                            <option value="Entregado">Entregado</option>     
                                
                               
                        </select>

                        <input value="Actualizar" type="submit" name="send" class="btn-send">
                        <style>.btn-send{background:#5cb85c; padding:.7rem;margin:1.3rem 0; text-align:center;border:0;border-radius:.7rem;color:white; font-weight:bold;cursor:pointer;}</style>
                    </form>
					
					<div class="btn-r">
						<?php 
							$sql = mysqli_query($link,"SELECT * FROM pedido INNER JOIN usuarios ON
							pedido.id_usuario = usuarios.id_usuario WHERE id_pedido = $id_pedido");
							$data = mysqli_fetch_array($sql);
						?>
						<button onclick="location.href='./order.php?id=<?php echo $data['id_usuario']?>'">Regresar</button>
					</div>
				<style>
					.order-status,.btn-r{
						display:flex;
						align-items:center;
						justify-content:center;
						flex-direction:column;

					}
					.btn-r button{
						background:#0275d8;
						color:white;
						border:none;
						border-radius: .7rem;
						padding:1rem;
						margin-top: 1.5rem;
						cursor:pointer;
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