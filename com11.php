<?php
session_start();
if (@!$_SESSION['user']) {
header("Location:contenido.php");
}elseif ($_SESSION['user']==1) {
header("Location:com11.php");
}
require_once("conexion/conexion.php");

?>

<!DOCTYPE HTML>
<html>
  <head>
    <link rel="shortcut icon" href="images/P.ICO"/>
    <meta charset="UTF-8">
<title>JEPEDI</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
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

<!-- Probando -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.3.0/build/menu/assets/skins/sam/menu.css">
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/container/container_core-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/menu/menu-min.js"></script>


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

<script type="text/javascript">
YAHOO.util.Event.onContentReady("menu_vertical", function () {
  var elMenu = new YAHOO.widget.Menu("menu_vertical", { width: '150px' });
  elMenu.render();
  elMenu.show();
});
</script>


        <!-----start-container---->
            <!----- start-header---->
            <div id="home" class="header">
        <div class="container">
          
          
          <!----start-top-nav---->
          

    <nav id="nav">
                            <ul>
                              <li class="active"><a href="">Bienvenid@ <strong><?php echo $_SESSION['user'];?></strong> 
                                <li><a href="desconectar.php">Inicio</a></li>
                                <li>
                                    <a href="#">Estadística</a>
                                    <ul>
                                        <li><a href="estadistica.php">Homicidios</a></li>
                                        <li><a href="combo2.php">Lesiones</a></li>
                                        <li><a href="#"></a></li>
                                        <li>
                                            <a href="#">Hurto y Robo</a>
                                            <ul>
                                                <li><a href="prueba.php">Vehículos</a></li>
                                                <li><a href="combo.php">Motocicletas</a></li>
                                                <li><a href="combo.php">Armas de Fuego</a></li>
                                                <li><a href="#">Residencias</a></li>
                                                <li><a href="#">Comercios</a></li>
                                                 <li><a href="#">Iglesias</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Robo</a>
                                            <ul>
                                                <li><a href="#">Peatones</a></li>
                                                <li><a href="#">Bancos</a></li>
                                                <li><a href="#">Buses</a></li>
                                                <li><a href="#">Vehículos Blindados</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Violencia Intrafamiliar</a></li>
                                        <li><a href="#">Violaciones </a></li>
                                         <li><a href="#">Secuestros </a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a href="#">Análisis</a>
                                    <ul>
                                        <li><a href="PDF/com11.pdf">Semanal</a></li>
                                        <li><a href="PDF/com11.pdf">Mensual</a></li>
                                        <li><a href="PDF/com11.pdf">Anual</a></li>
                                        </ul>
                                      </li>
                                <li>
                                    <a href="#">Ingreso Datos</a>
                                    <ul>
                                        <li><a href="ingresoP.php">Positivos</a></li>
                                        <li><a href="ingresoD.php">Negativos</a></li>
                                        </ul>
                                      </li>
                                <li class="current"><a href="no-sidebar.html">Comisaria 11</a></li>
                            </ul>
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


   <br>



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
 
      <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Hechos Positivos Comisaria 11'
        },
        xAxis: {
            categories: ['Hechos Positivos']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Escala'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: 'Detenidos',
            data: [   <?php
            $sql=mysql_query ("SELECT SUM( total ) AS Detenidos FROM estadisticap WHERE positivo_id = '1'");
            while($res=mysql_fetch_array($sql)){
            ?>            
           [ <?php echo $res['Detenidos'] ?> ],

   <?php
            }
            ?>]
        }, {
            name: 'Armas Incautadas',
            data: [   <?php
            $sql=mysql_query ("SELECT SUM( total ) AS Armas FROM estadisticap WHERE positivo_id ='2'");
            while($res=mysql_fetch_array($sql)){
            ?>            
           [ <?php echo $res['Armas'] ?> ],

   <?php
            }
            ?>]
        },{
            name: 'Vehículos Recuperados',
            data: [   <?php
            $sql=mysql_query ("SELECT SUM( total ) AS Vehiculos FROM estadisticap WHERE positivo_id ='3'");
            while($res=mysql_fetch_array($sql)){
            ?>            
           [ <?php echo $res['Vehiculos'] ?> ],

   <?php
            }
            ?>]
        }, {
            name: 'Motocicletas Recuperadas',
            data: [   <?php
            $sql=mysql_query ("SELECT SUM( total ) AS Motos FROM estadisticap WHERE positivo_id ='4'");
            while($res=mysql_fetch_array($sql)){
            ?>            
           [ <?php echo $res['Motos'] ?> ],

   <?php
            }
            ?>]
        }]
    });
});
        </script>
   </head>
<body>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
<div id="container" style="min-width: 310px; height: 600px; margin: 0 auto"></div>
</body>
</html>