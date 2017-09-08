 
<!DOCTYPE HTML>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:contenido.php");
}elseif ($_SESSION['user']==1) {
  header("Location:com11.php");
}

?>

  
<html>
<head>
<link rel="shortcut icon" href="images/p.ico"/>
<meta charset="UTF-8">
<title>JEPEDI</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
<!---- start-smoth-scrolling---->
 <!-- Custom Theme files -->

<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!----//webfonts---->
<!----start-top-nav-script---->
        <script>
            $(function() {
                var pull        = $('#pull');
                    menu        = $('nav ul');
                    menuHeight  = menu.height();
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });
        </script>
<!----//End-top-nav-script---->
<style type="text/css">
  h1 { color: red;  font-family: Arial;   font-size: large;  }
  p  { color: gray; font-family: Verdana; font-size: medium; }
</style>
<style type="text/css">
.article {
  float: left;
  margin: 5px;
  padding: 5px;
  width: 300px;
  height: 300px;
  border: 1px solid black;
} 
</style>


</head>
<body >

        <!-----start-container---->
            <!----- start-header---->
            <div id="home" class="header">
        <div class="container">
          
          
          <!----start-top-nav---->
           <nav class="top-nav">
            <ul class="top-nav">
                           
                            <li class="active"><a href="">Bienvenid@ <strong><?php echo $_SESSION['user'];?></strong> 
                           
                            <li ><a href="com11.php">Regresar</a></li>
                       </ul>
            <a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
          </nav>
          <div class="clearfix"> </div>
          <div class="contact-info">
            <p><span><label></label></span>2500-1131</p>
          </div>
        </div>
      </div>

            <!----- //End-header---->
            <!----start-slider-script---->
            <script src="js/responsiveslides.min.js"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
            <!----//End-slider-script---->
            <!-- Slideshow 4 -->

<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/diseño.css">
<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="js/script.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

</style>
<link href="js/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
  <style type="text/css">
  body{
    font-family: tahoma, verdana, sans-serif;
  }
  </style>
  <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="js/calendario_dw.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
    $(".campofecha").calendarioDW();
  })
  </script>

</a>
</li>
</ul>
</nav>
</div>
</div>
</div>

<br>
<br>
<br>

<div id="contenedor">

<div id="menu">
  
    <img  id="imag" src="images/fondo.png" alt="Imagen genérica" />
      
 </div>


 <div id="contenido">
 <div id="principal">
 <form method="post" action="guardarPositivo.php">
    <div class="to"> 
        <div class="form-group">
     
            <label for="select" class="col-lg-1 control-label">Mes</label>
            <div class="col-lg-2">        
            <select name="mes" class="form-control" id="select">
                 <?php
                 $con = mysqli_connect('mysql.hostinger.es','u253926390_pnc','6tFBmlvloG','u253926390_pnc');

                  $query = "SELECT * FROM mes";

                  $record = mysqli_query($con, $query);

                  while ($dato = mysqli_fetch_array($record)) 
                  {
                    echo "<option value='".$dato['id']."'>".$dato['mes']."</option>";
                  }

                ?>

              </select>
          </div>
            </div> 
      <div class="form-group">
     
            <label for="select" class="col-lg-1 control-label">Acciones Positivas</label>
            <div class="col-lg-3">        
            <select name="delito" class="form-control" id="select">
                 <?php
                 $con = mysqli_connect('mysql.hostinger.es','u253926390_pnc','6tFBmlvloG','u253926390_pnc');

                
                  $query = "SELECT * FROM positivo";

                  $record = mysqli_query($con,$query);

                  while ($dato = mysqli_fetch_array($record)) 
                  {
                    echo "<option value='".$dato['id']."'>".$dato['accion']."</option>";
                  }

                ?>

              </select>
          </div>
            </div>
        
<br><br>

             <div class="form-group">
            <label for="select" class="col-lg-1 control-label">Total</label>
            <div class="col-lg-3">
              <input name="total" class="form-control"  placeholder="Total" type="text">
            </div>
          </div>
          

        

   <div class="form-submit1">
          
        <button type="submit" class="btn btn-danger" ">Enviar Datos</button>
         
  </div>


  <div class="clear"></div>
  </div>
  </form>
<br>
<br>
<br>
<br>




  </div>

      
  <div id="secundario">   
    <p>Debe ingresar lo hechos negativos que suceden dentro de su comisaría día a día, la hora de corte será 23:00 horas </p>
 </div>
 </div>
 </div>
 
<?php 
require("eliminarP.php");
/* Mostrar la tabla con los registros */
echo $table; 

?>


 <?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>


 </body>
</html>

