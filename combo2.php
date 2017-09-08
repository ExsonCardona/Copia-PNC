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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Homicidios'
        },
        subtitle: {
            text: 'www.jepedi.gob.gt'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Escala',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: 'Hechos'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: '2015',
             color: 'rgba(203, 67, 53,.9)',
            data: [
            
            <?php
            $sql=mysql_query("SELECT ano, mes_id, mes.mes, total from historia inner join mes on mes.id=historia.mes_id where ano='2015'");
            while($res=mysql_fetch_array($sql)){
            ?>          
            
           ['<?php echo $res['ano'] ?>', <?php echo $res['total'] ?> ],

            <?php
            }
            ?>
]
        }, {
            name: '2016',
            data: [
            
            <?php
            $sql=mysql_query("select ano, mes_id, mes.mes, total from historia inner join mes on mes.id=historia.mes_id where ano='2016'");
            while($res=mysql_fetch_array($sql)){
            ?>          
            
           ['<?php echo $res['ano'] ?>', <?php echo $res['total'] ?> ],

            <?php
            }
            ?>]
        }, {
            name: '2017',
            color: 'rgba(46, 204, 113,.9)',  
            data: [
            
            <?php
            $sql=mysql_query("select ano, mes_id,  sum(total) as total1 from estadistica where ano='2017' Group By mes_id ");
            while($res=mysql_fetch_array($sql)){
            ?>          
            
           ['<?php echo $res['ano'] ?>', <?php echo $res['total1'] ?> ],

            <?php
            }
            ?>]
        }]
    });
});
        </script>
	</head>
	<body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 510px; height: 700px; margin: 0 auto"></div>

	</body>
</html>
