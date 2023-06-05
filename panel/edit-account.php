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

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Cuenta</h1>
					
				</div>
				
			</div>

		


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Editar cuenta</h3>
						
					</div>

					<div class="detalles">
                        <style>.detalles{display:flex;align-items:center;justify-content:center; flex-direction:column}</style>
                       
                        <?php 
                            $sql = mysqli_query($link,"SELECT * FROM cuenta");
                            $row = mysqli_fetch_array($sql);
                        ?>
                       <form action="../admin/edit-account.php?id_cuenta=<?php echo $row['id_cuenta']?>" method="POST" class="datos-productos"> 
                         
                         <div class="edit-cont">
                         <label for="cuenta">Cuenta:</label>
                         <input type="text" name="cuenta" id="cuenta" value="<?php echo $row['cuenta']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="titular">Titular:</label>
                         <input type="text" name="titular" id="titular" value="<?php echo $row['titular']?>">      
                         </div>

                         <div class="edit-cont">
                         <label for="banco">Banco:</label>
                         <input type="text" name="banco" id="banco" value="<?php echo $row['banco']?>">      
                         </div>

                         <input type="hidden" name="id" value="<?php echo $row['id_cuenta']?>">
                         <div class="edit-cont">
                         <input  class="btn-editar" type="submit" name="send" value="Editar"> 
                         </div>
                        <style>
                            .datos-productos{
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                flex-direction:column;
                            }
                            .edit-cont{
                                margin-top:1rem;
                            }
                            input{
                                 
                                padding:1rem;
                                border-radius:0.8rem;
                            }
                            .btn-editar{
                                background:#14A44D;
                                border:none;
                                font-weigth:bold;
                                cursor:pointer;
                                color:white;
                            }
                            
                        </style>
                        </form>
                        <button class="btn-r" onclick="location.href='./account.php'">
                                Regresar
                        </button>                        
                        <style>.btn-r{
                                margin-top: 1.5rem;
                                padding:1rem;
                                border-radius:0.8rem;
                                background:#0275d8;
                                border:none;
                                font-weigth:bold;
                                cursor:pointer;
                                color:white;
                            }
                        </style>
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