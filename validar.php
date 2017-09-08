
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql1=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='1'");
	if($f2=mysqli_fetch_assoc($sql1)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com11.php'</script>";
		}
	}
else{

	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='2'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com12.php'</script>";
		}
	}
}

$sql3=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='3' ");
	if($f2=mysqli_fetch_assoc($sql3)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com13.php'</script>";
		
		}
	}

else{
$sql4=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='4'");
	if($f2=mysqli_fetch_assoc($sql4)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com14.php'</script>";
		
		}
	}
}

	$sql5=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='5'");
	if($f2=mysqli_fetch_assoc($sql5)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com15.php'</script>";
		
		}
	}

	$sql6=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='6'");
	if($f2=mysqli_fetch_assoc($sql6)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com16.php'</script>";
		
		}
	}

	$sql7=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='7'");
	if($f2=mysqli_fetch_assoc($sql7)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com21.php'</script>";
		
		}
	}

		$sql8=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='8'");
	if($f2=mysqli_fetch_assoc($sql8)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com22.php'</script>";
		
		}
	}

		$sql9=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='9'");
	if($f2=mysqli_fetch_assoc($sql9)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com23.php'</script>";
		
		}
	}

		$sql10=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='10'");
	if($f2=mysqli_fetch_assoc($sql10)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com24.php'</script>";
		}
	}

		$sql11=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='11'");
	if($f2=mysqli_fetch_assoc($sql11)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com31.php'</script>";
		
		}
	}
			$sql12=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='12'");
	if($f2=mysqli_fetch_assoc($sql12)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com32.php'</script>";
		
		}
	}		$sql13=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='13'");
	if($f2=mysqli_fetch_assoc($sql13)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com33.php'</script>";
		
		}
	}		$sql14=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='14'");
	if($f2=mysqli_fetch_assoc($sql14)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com34.php'</script>";
		
		}
	}

	$sql15=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='15'");
	if($f2=mysqli_fetch_assoc($sql15)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com41.php'</script>";
		}
	}
			$sql16=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='16'");
	if($f2=mysqli_fetch_assoc($sql16)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com42.php'</script>";
		
		}
	}		$sql17=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='17'");
	if($f2=mysqli_fetch_assoc($sql17)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com43.php'</script>";
		
		}
	}		$sql18=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='18'");
	if($f2=mysqli_fetch_assoc($sql18)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com44.php'</script>";
		
		}
	}

	$sql19=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='19'");
	if($f2=mysqli_fetch_assoc($sql19)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com51.php'</script>";
		
		}
	}
			$sql20=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='20'");
	if($f2=mysqli_fetch_assoc($sql20)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com52.php'</script>";
		
		}
	}		$sql21=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='21'");
	if($f2=mysqli_fetch_assoc($sql21)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com53.php'</script>";
		
		}
	}		$sql22=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='22'");
	if($f2=mysqli_fetch_assoc($sql22)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com61.php'</script>";
		
		}
	}

		$sql23=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='23'");
	if($f2=mysqli_fetch_assoc($sql23)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com62.php'</script>";
		
		}
	}
	$sql24=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='24'");
	if($f2=mysqli_fetch_assoc($sql24)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com71.php'</script>";
		
		}
	}		$sql25=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='25'");
	if($f2=mysqli_fetch_assoc($sql25)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com72.php'</script>";
		
		}
	}		$sql26=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='26'");
	if($f2=mysqli_fetch_assoc($sql26)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com73.php'</script>";
		
		}
	}




	$sql27=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and comisaria_id='27'");
	if($f2=mysqli_fetch_assoc($sql27)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='com73.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='contenido.php'</script>";
		}
	}else{
		
		echo '<script>alert("Este usuario no existe, debe registrarse")</script> ';
		
		echo "<script>location.href='contenido.php'</script>";	

	}

?>