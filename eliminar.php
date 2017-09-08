<?php
/* By http://php-estudios.blogspot.com */

/* PARTE 1: AL INICIO SE EXTRAEN TODAS LAS FILAS */
//Necesitamos establecer una conexión con la base de datos.
error_reporting(E_ALL ^ E_DEPRECATED);
$mysql_usuario = "u253926390_pnc";
$mysql_password = "6tFBmlvloG";
$mysql_host = "mysql.hostinger.es";
$mysql_database = "u253926390_pnc";

//Datos de conexión
$conexion = mysql_connect($mysql_host, $mysql_usuario, $mysql_password, true);

//Seleccionar la base datos y la conexión y capturar posibles errores con die
mysql_select_db($mysql_database, $conexion) || die('No pudo conectarse: '.mysql_error());

//Preparar la consulta para extraer todos los clientes
$consulta = "SELECT estadistica.id, estadistica.ano, mes.mes, estadistica.fecha, comisaria.comisaria, delito.delito,estadistica.total from estadistica  inner join comisaria  on comisaria.id=estadistica.comisaria_id inner join delito 
on delito.id=estadistica.delito_id inner join mes on mes.id=estadistica.mes_id";

//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//Extraer todas la filas y almacenarlas en una tabla
$table = "<table width='50%''  border='1' cellspacing='0' cellpadding='0'>\n";
  

$table .= "<tr ><td> Año</td><td valign='middle'> Mes</td><td> Fecha Actualización</td><td> Comisaría</td><td> Delito</td> <td>Total Hechos del día</td><td></td></tr>\n";
while($fila = mysql_fetch_assoc($resultado)){
$table .= "<tr>
    
      <td  valign='middle'>".$fila['ano']."</td>
      <td  valign='middle'>".$fila['mes']."</td>
      <td  valign='middle'>".$fila['fecha']."</td>
      <td  valign='middle'>".$fila['comisaria']."</td>
      <td  valign='middle'>".$fila['delito']."</td>
      <td  valign='middle'>".$fila['total']."</td>
      <td height='40' valign='top' >
       <form method='post' action=''> <input type='hidden' name='id' value='"
      .$fila["id"]."'>
      <input class='btn btn-warning' type='submit' value='Eliminar'>
      </form></td>
   </tr>\n";
    }
$table .= "</table>\n"; 


/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */

if (isset($_POST["id"]))
{
//Se almacena en una variable el id del registro a eliminar
$id_estadistica = $_POST["id"];

//Preparar la consulta
$consulta = "DELETE FROM estadistica WHERE id=$id_estadistica";

//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//redirigir nuevamente a la página para ver el resultado
header("location: ingresoD.php");
}
  
?>