<?php 

include("conexion_be.php");

	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
		$consulta = "INSERT INTO `regist`(`Nombre_completo`, `Correo_Electronico`, `Usuario`, `Contraseña`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) {
			?>
			<h3>Te has registrado correctamente!</h3>
			<?php
		}else {
			?>
			<h3>Ups a ocurrido un error1</h3>
			<?php
		}
?>