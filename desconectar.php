<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location:contenido.php");
}
else{
	header("location:contenido.php");
}
?>