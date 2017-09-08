<?php session_start();
if (@!$_SESSION['user']) {
  header("Location:desconectar.php");
}elseif ($_SESSION['user']==1) {
  header("Location:com11.php");
}
?>
<!DOCTYPE HTML>

  
<html>
<head>
<link rel="shortcut icon" href="images/p.ico"/>
<meta charset="UTF-8">
<title>JEPEDI</title>
<link rel="shortcut icon" type="images/pnc.png" href="pnc.png">
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
                           
                            <li ><a href="homicidios.php">Estadistica Barras</a></li>
                            <li ><a href="estadistica.php">Estadistica Lineas</a></li>
                            <li ><a href="combo.php">Combo</a></li>
                            <li ><a href="ingresoD.php">Ingreso Delitos</a></li>

                            <li ><a href="desconectar.php">Cerrar Sesion</a></li>
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
</a>
</li>
</ul>
</nav>
</div>
</div>
</div>

<br><br>

<div id="contenedor">
<div id="menu">
<img  id="imag" src="images/FONDO.png" alt="Imagen genérica" />
  <h3>Descargar Mapas</h3>
  <div class="form-group">
<div class="col-lg-03 col-lg-offset-03">
     <button type="button" class="btn btn-primary" value="Descargar" onclick="document.location.href='https://mega.nz/#!wksAkKxS!yUutE1NItM0UPOyJhDjIzsCaTkmSfWV7c6cm9V-SgUQ'" >
      <span class="glyphicon glyphicon-cloud-download" href=""> Mopsic</span>
    </button>
</div>
</div>
</div>


<div id="contenido">
<div id="principal">
<embed  src="PDF/com73.pdf" width="1000" height="4500">
</div>
</div>
  


<div id="pie">
<div class="copy" id="link">
           <p>&copy; Copyright 2016 todos los derechos reservados ESCF <a href="http://www.facebook.com/Exson.Cardona"  > ESCF</a></p>
        </div>
        </div>
        </div>

</body>
</html>
<?php

?>