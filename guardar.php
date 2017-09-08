<?php 

	$vDeli=$_POST['delito'];
	$vTot=$_POST['total'];
	$vMs=$_POST['mes'];

	

	

 $con = mysqli_connect('mysql.hostinger.es','u253926390_pnc','6tFBmlvloG','u253926390_pnc');


	$query = "INSERT INTO estadistica (ano,fecha,total,comisaria_id,delito_id,mes_id)
	VALUES ('2017',now(),'$vTot','1','$vDeli','$vMs')";

mysqli_query($con,$query);

 ?>
<script language="javascript">window.location="ingresoD.php";</script>

ingresoD
 
 

