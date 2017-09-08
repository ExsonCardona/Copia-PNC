<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>JEPEDI</title>
<link rel="shortcut icon" href="images/P.ICO"/>
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
                            <li class="active"><a href="#home" class="scroll">Bienvenido</a></li>
                            <li ><a href="index.php">Inicio</a></li>
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
</head>


<div id="contenedor">

<div id="menu">
<div id="comisarias">
<div id="distritos">
<div class="form-group">
 <div class="col-lg-2 ">
<div class="btn-group">
<ul class="menu menu-responsive">
<img id="imag" src="images/fondo.png" alt="Imagen genérica" />


        <li><a id="dcentral"   >Distrito Central</a> </li>
        <li><a id="dsur"       >Distrito Sur</a></li>
        <li><a id="doccidente" >Distrito Occidente</a></li>
        <li><a id="doriente"   >Distrito Oriente</a></li>
        <li><a id="dnocc"      >Distrito Nor-Occidente</a></li>    
        <li><a id="dnoro"      >Distrito Nor-Oriente</a></li>
        <li><a id="dnorte"     >Distrito Norte</a></li> 
        <li><a id="destadistica">Estadistica General</a></li> 
</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div> 
 

<br><br>
<!--Botones -->
<div id="contenido">
<div id="principal">

<div id="central">
 <div class="form-group">
<div class="col-lg-9 col-lg-offset-2">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Central</h2>
</div>
  <button id="btn11" type="button" class="btn btn-primary"> Comisaria 11</button>
  <button id="btn12" type="button"  class="btn btn-primary"> Comisaria 12</button>
  <button id="btn13" type="button"  class="btn btn-primary"> Comisaria 13</button>
  <button id="btn14" type="button"  class="btn btn-primary"> Comisaria 14</button>
  <button id="btn15" type="button"  class="btn btn-primary"> Comisaria 15</button>
  <button id="btn16" type="button"  class="btn btn-primary"> Comisaria 16</button>
 
            </div>
          </div>
        </div>
      </div>

    
     






<!--Distrito Occidente-->

<div id="occidente">
<div class="form-group">
<div class="col-lg-8 col-lg-offset-3">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Occidente</h2>
</div>
  <button id="btn41"  type="button"  class="btn btn-primary"> Comisaria 41</button>
  <button id="btn42" type="button"  class="btn btn-primary"> Comisaria 42</button>
  <button id="btn43" type="button"  class="btn btn-primary"> Comisaria 43</button>
  <button id="btn44" type="button"  class="btn btn-primary"> Comisaria 44</button>

</div>
</div>
</div>
</div>





<!--Distrito NorOccidente-->



<div id="noroccidente">
<div class="form-group">
<div class="col-lg-8 col-lg-offset-3">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Nor Occidente</h2>
</div>
  <button id="btn71" type="button"  class="btn btn-primary"> Comisaria 71</button>
  <button id="btn72" type="button"  class="btn btn-primary"> Comisaria 72</button>
  <button id="btn73" type="button"  class="btn btn-primary"> Comisaria 73</button>
  <button id="btn74" type="button"  class="btn btn-primary"> Comisaria 74</button>

</div>
</div>
</div>
</div>






<!--Distrito Sur-->



<div id="sur">
 <div class="form-group">
<div class="col-lg-8 col-lg-offset-3">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Sur</h2>
</div>
  <button id="btn31" type="button"  class="btn btn-primary"> Comisaria 31</button>
  <button id="btn32" type="button"  class="btn btn-primary"> Comisaria 32</button>
  <button id="btn33" type="button"  class="btn btn-primary"> Comisaria 33</button>
  <button id="btn34" type="button"  class="btn btn-primary"> Comisaria 34</button>
 
 </div>
</div>
</div>
</div>






<!--Distrito Nor-Oriente-->



<div id="nororiente">
<div class="form-group">
<div class="col-lg-8 col-lg-offset-3">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Nor Oriente</h2>
</div>
  <button id="btn22" type="button"  class="btn btn-primary"> Comisaria 22</button>
  <button id="btn51" type="button"  class="btn btn-primary"> Comisaria 51</button>
  <button id="btn52" type="button"  class="btn btn-primary"> Comisaria 52</button>
  <button id="btn53" type="button"  class="btn btn-primary"> Comisaria 53</button>

</div>
</div>
</div>
</div>





<!--Distrito Oriente-->



<div id="oriente">
 <div class="form-group">
<div class="col-lg-8 col-lg-offset-3">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Oriente</h2>
</div>
  <button id="btn21" type="button"  class="btn btn-primary"> Comisaria 21</button>
  <button id="btn23" type="button"  class="btn btn-primary"> Comisaria 23</button>
  <button id="btn24" type="button"  class="btn btn-primary"> Comisaria 24</button>
  <button id="btn61" type="button"  class="btn btn-primary"> Comisaria 61</button>

</div>
</div>
</div>
</div>



 


<!--Distrito Norte-->

<!--Login General-->
<br><br><br><br><br><br><br><br><br>

<div align="right">
<div id="log">
<h3 align="center">Inicio de sesión</h3>
<div class="Ingreso">
<form action="validar.php" method="post">
  <table border="0" align="center" valign="middle">
    <tr>
    <td rowspan=2>
    <table border="0">
    <tr><td><label style="font-size: 14pt"><b>Usuario: </b></label></td>
      <td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="usuario"></td></tr>
    <tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
      <td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
    <tr><td></td>
      <td width=200 align=center><input class="btn btn-danger" type="submit" value="Aceptar"></td>
      </tr></table></td></tr></table>
   
    
</form>
</div>
</div>
</div>


  </div>
  </div>
    </div>

<div id="pie">



<div class="copy" id="link">
           <p>&copy; Copyright 2016 todos los derechos reservados ESCF <a href="http://www.facebook.com/Exson.Cardona"  > ESCF</a></p>
        </div>
        </div>


      

</body>
</html>