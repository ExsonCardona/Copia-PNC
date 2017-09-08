<?php 

	$vNombre=$_POST['nombre'];
	$vEmail=$_POST['correo'];
	$vEmpresa=$_POST['empresa'];
	$vMjs=$_POST['mensaje'];


  $con = mysqli_connect('mysql.hostinger.es','u253926390_pnc','6tFBmlvloG','u253926390_pnc');

		
	$query = "INSERT INTO comentario (nombre,correo,empresa,mensaje) 
	VALUES ('$vNombre','$vEmail','$vEmpresa','$vMjs')";
	mysqli_query($con,$query);

	?>

<script language="javascript">window.location="index.php";</script>

 
 

