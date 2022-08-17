<?php 

include("con_db.php");

if (isset(($_POST['register'])) {
	if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
		$name = trim($_POST['name']);
		$name = trim($_POST['email']);
		$consulta = "INSERT INTO datos(Nombre, correo, fecha) VALUES ([value-1],[value-2],[value-3])";
		$resultado = mysql_query($conex,$consulta);
		if ($resultado) {
			?>
			<h3 class="ok">Te has registrado correctamente!</h3>
			<?php
		}	else {
			?>
			<h3 class="bad">Ups a ocurrido un error1</h3>
			<?php
		}
	}	else {
			?>
			<h3 class="bad">Porfavor completa los campos</h3>
			<?php
		}
	}

?>