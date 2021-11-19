<?php 
	//LEVANTAMOS LA SESION 
	session_start();

	if(isset($_SESSION["sesion_iniciada"]))
		{
		if ($_SESSION["sesion_iniciada"] != 1) {
			header('Location: p1.php'); //SI NO ESTA LA SESION INICIADA POR ESO DIFERENTE DE 1 O NO ES VAOR 1 TE INVITA A INICIAR SESION
			die();
		}
	}else{
		header('Location: p1.php');
		die();
	}

	//VER SI QUIERE SALIR 
	$salir = @$_POST["salir"];
	if ($salir == 1) {
		session_unset();
		session_destroy();
		header('Location: p1.php');
	}
	//FIN VER SI QUIERES SALIR 
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>PAGINA 2</title>
</head>
<body>
	<H3>Bienvenido <?php echo $_SESSION["usuario"]; ?> </H3>
	<form action="p2.php" method="POST">
		<input type="submit" name="Cerrar" value="LOGOUT"/>
		<input type="hidden" name="salir" value="1"/>
	</form>
	
</body>
</html>


