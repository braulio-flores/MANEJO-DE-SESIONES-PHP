<?php 

  session_start(); //LEVANTAMOS LA SESION 

  if(isset($_SESSION["sesion_iniciada"]))
		{
		if ($_SESSION["sesion_iniciada"] == 1) {
			header('Location: p2.php'); //SI NO ESTA LA SESION INICIADA POR ESO DIFERENTE DE 1 O NO ES VAOR 1 TE INVITA A INICIAR SESION
			die();
		}
	}
   //FIN REVISAR SESION INICIADA

  $correo = @$_POST["txtNom"]; 
  $pas = @$_POST["txtPass"];

  if ($pas == "1234") {
    //ENTRA
    $_SESSION["sesion_iniciada"] = 1;
    $_SESSION["usuario"] = $correo;
    header('Location: p2.php');
  }else{
    //RECHAZADO
    echo "USUARIO INVALIDO";
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>P1 FORM</title>
</head>
<body>
	<form action="p1.php" method="POST">
		<label>CORREO</label>
		<input type="text" name="txtNom">
		<label>CONTRASEÑA</label>
		<input type="password" name="txtPass">
		<input type="submit" name="button" value="SESION">
    <p>El usuario puede ser cualquiera, sirve para mostrar tu nombre en la siguiente pagina,
      el cual se almacena en la variable de sesion llamada usuario, la contraseña debe de ser 1234 obligatoriamente
      ya que esta "validada".
      Lla siguiente pagina se llama p2.php, se puede realizar la peticion directa, pero no te dejara entrar si no has
      "iniciado sesion"
    </p>
    <p>De igual manera una vez estando dentro de p2.php, no te dejara volver a esta pagina en donde es el inicio de sesion,
      a menos que cierres esta.
    </p>
	</form>
</body>
</html>


