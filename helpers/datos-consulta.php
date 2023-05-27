<?php 
    include('../db/connect_db.php');
    session_start();
    $id_user = $_SESSION['idu'];

    $target_path = "../assets/identificaciones/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    $imagen = basename($_FILES['uploadedfile']['name']);
    
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $enfermedades = $_POST['enfermedades'];
    $medicamentos = $_POST['medicamentos'];
    $antecedentes = $_POST['antecedentes'];
    $alergias = $_POST['alergias'];
    $motivo = $_POST['motivo'];
    $tratamiento = $_POST['tratamiento'];
    $vacuna = $_POST['vacuna'];
    $cita = $_POST['cita'];

    mysqli_query($link,"INSERT INTO consulta VALUES(null,'$imagen','$edad','$telefono','$enfermedades','$medicamentos','$antecedentes','$alergias','$motivo','$tratamiento','$vacuna','$cita','$id_user')");
    echo("<script>location.href= '../pages/confirmacion.php'; </script>");
} else{
    echo("<script>location.href= '../consulta.php'; </script>");
}
    
?>