<?php
/*
 * Valida un usuario y contraseña o presenta el formulario para hacer login
 */

if ($_SERVER['REQUEST_METHOD']=='POST') { // ¿Nos mandan datos por el formulario?
    include('php_lib/config.ini.php'); //incluimos configuración
    include('php_lib/login.lib.php'); //incluimos las funciones

    //verificamos el usuario y contraseña mandados
    if (login($_POST['usuario'],$_POST['password'])) {

       //acciones a realizar cuando un usuario se identifica
       //EJ: almacenar en memoria sus datos, registrar un acceso a una tabla de datos


        //saltamos al inicio del área restringida
        //header('Location: pagina-acceso-restringido.php');
		 
		//Sentencia SQL para buscar un usuario con esos datos 
		$ssql = "SELECT * FROM usuario WHERE usuario='$nivel'"; 

		//Ejecuto la sentencia 
		$rs = mysql_query($ssql,$link); 

    
    
    if (mysql_num_rows($rs)!=0){ 
		
		switch($rs)
		{
			case "1":
			header('Location:com11.pdf');
			break;

			case "2":
			header('Location:com12.pdf');
			break;

			case "3":
			header('Location:com13.pdf');
			break;
			default:
	        echo "Aun no has puesto el nivel";  

}
	}
		
	die();
    } else {
        //acciones a realizar en un intento fallido
        //Ej: mostrar captcha para evitar ataques fuerza bruta, bloqueas durante un rato esta ip, ....


        //preparamos un mensaje de error y continuamos para mostrar el formulario
        $mensaje='Usuario o contraseña incorrectos.';
    }
} //fin if post
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>DirecPedidos</title>
    </head>
    <body>
        <h1>DirecPedidos</h1>
        <?php
            //si hay algún mensaje de error lo mostramos escapando los carácteres html
            if (!empty($mensaje)) echo('<h2>'.htmlspecialchars($mensaje).'</h2>');
        ?>
        <form action="login.php" enctype="multipart/form-data" method="post">
            <label>Usuario:
                <input name="usuario" type="text" />
            </label>
            <label>Contraseña:
                <input name="password" type="password" />
            </label>
            <input type="submit" value="Entrar" name="submit" />
        </form>
    </body>
</html>