<?php 

	$vDeli=$_POST['delito'];
	$vTot=$_POST['total'];
	$vMs=$_POST['mes'];

	

	

 $con = mysqli_connect('mysql.hostinger.es','u253926390_pnc','6tFBmlvloG','u253926390_pnc');


	$query = "INSERT INTO estadisticap (ano,fecha,total,comisaria_id,positivo_id,mes_id)
	VALUES ('2017',now(),'$vTot','1','$vDeli','$vMs')";

mysqli_query($con,$query);

 ?>
<script language="javascript">window.location="ingresoP.php";</script>

ingresoD
 
 

