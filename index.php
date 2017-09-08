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
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
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

</head>
<body>



		<!-----start-container---->
			<!----- start-header---->
			<div id="home" class="header" >
				<div class="container">
					
					
					<!----start-top-nav---->
					 <nav class="top-nav">
						<ul class="top-nav ">
							<li class="active"><a href="#home" class="scroll">Bienvenidos</a></li>
							<li class="page-scroll"><a href="#features" class="scroll">DEPEO</a></li>
							<li class="page-scroll"><a href="#team" class="scroll">Seccion de Analisis</a></li>
							<li class="page-scroll"><a href="#gallery" class="scroll">GIS</a></li>
							<li class="page-scroll"><a href="#pricing" class="scroll">Planificacion</a></li>
							<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contactenos</a></li>
							<li ><a href="contenido.php">Informacion</a></li>
						</ul>
						<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
					</nav>
					<div class="clearfix"> </div>
					<div class="contact-info">
						<p><span><label> </label></span>2500-1131</p>
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

			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/slide1.jpg" alt="">
			          <div class="caption">
			          </div>
			        </li>
			        <li>
			          <img src="images/slide3.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			            		
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide4.jpg" alt="">
			          <div class="caption">
			          </div>
			        </li>
			        <li>
			          <img src="images/slide5.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          
			          	</div>
			          </div>
			        </li>

			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End-slider---->
			<!-----start-fearures---->
			<a class="navbar-brand" href="#"><img src="images/fondo.png"></a>	
			<div class="features" id="features">
				<div class="container">
					<div class="features-head text-center">
						<h2><span> -DEPEO- </span></h2>
						<p>Funciones</p>
					</div>
					<div class="feature-grids">
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon6"> </span> No. 1</h3>
							<p>Coordinar el Sistema estad&#237;stico policial y proponer mejoras para la captaci&#243;n, procesamiento y producci&#243;n de informaci&#243;n estad&#237;stica institucional.</p>
						</div>
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon6"> </span>No. 2</h3>
							<p>Coordinar el Sistema de Informaci&#243;n Geogr&#225;fica Policial y proponer mejoras para la captaci&#243;n, procesamiento y producci&#243;n de informaci&#243;n georeferencial institucional</p>
						</div>
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon6"> </span> NO. 3</h3>
							<p>Apoyar y evaluar desde un nivel estrategico, la planificaci&#243;n operativa de la Polic&#237;a Nacional Civil.</p>
						</div>
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon6"> </span>NO. 4</h3>
							<p>Elaborar an&#225;lisis y recomendaciones en los temas de su competencia y las asignadas por el Jefe inmediato superior en materia de su competencia.</p>
						</div>

					<div class="clearfix"> </div>
					</div>
					<br>

					<div class="col-md-3 team-grid">
							
						</div>
						<div class="col-md-3 team-grid">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/depeo2.jpg" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="animate-head">
						     			<div class="animate-head-left">
						     					<h3>JEPEDI</h3>
						     				<span>INSTALACIONES </span>
						     			</div>
						     			<div class="clearfix"> </div>
						     		</div>
						     	</h2>
						  	</div></a>
						  	<div class="t-member-info">
						  		
						  		<span>-DEPEO-</span>
						  	</div>
						</div>

						<div class="col-md-3 team-grid">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/pas.jpg" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="animate-head">
						     			<div class="animate-head-left">
						     				<h3>JEPEDI</h3>
						     				<span>INSTALACIONES </span>
						     			</div>
						     			<div class="clearfix"> </div>
						     		</div>
						     	</h2>
						  	</div></a>
						  	<div class="t-member-info">
						  		
						  		<span>-DEPEO-</span>
						  	</div>
						</div>
					</div>
			</div>

			<!-----//End-fearures---->
			<!-----start-team---->
			

			<!-----ANALISIS---->
			<div class="team" id="team">
				<div class="container">
					<div class="team-head text-center">
						<h3>SECCI&#211;N DE AN&#193;LISIS</h3>
						<br>
																
						<div class="col-md-5 feature-grid">
							<h3><span class="fea-icon6"> </span>NO. 1</h3>
							<p>Coordinar los aspectos de captaci&#243;n, procesamiento, an&#225;lisis de la informaci&#243;n estad&#237;stica policial</p>
						</div>
						<div class="col-md-6 feature-grid">
							<h3><span class="fea-icon6"> </span>NO. 2</h3>
							<p>Generar reportes estad&#237;sticos cuantitativos y cualitativos que permiten realizar an&#225;lisis sobre la tipolog&#237;a delictiva nacional.</p>
						</div>					
					</div>		
				</div>
			</div>
			
			<div class="team" id="team">
				<div class="container">
					<div class="team-grids">
						<div class="col-md-3 team-grid">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/t1.jpg" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="animate-head">
						     			<div class="animate-head-left">
						     				<h3>ESTAD&#237;STICA CUANTITATIVA</h3>
						     				<span>Secci&#243;n de An&#225;lisis</span>
						     			</div>
						     			<div class="clearfix"> </div>
						     		</div>
						     	</h2>
						  	</div></a>
						  	<div class="t-member-info">
						  		<h5>Secci&#243;n An&#225;lisis</h5>
						  		<span>-DEPEO-</span>
						  	</div>
						</div>

						<div class="col-md-3 team-grid">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/t2.jpg" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="animate-head">
						     			<div class="animate-head-left">
						     				<h3>ESTAD&#237;STICA CUALITATIVA</h3>
						     				<span>Secci&#243;n de An&#225;lisis</span>
						     			</div>
						     			<div class="clearfix"> </div>
						     		</div>
						     	</h2>
						  	</div></a>
						  	<div class="t-member-info">
						  			<h5>Secci&#243;n An&#225;lisis</h5>
						  		<span>-DEPEO-</span>
						  	</div>
						</div>
						<div class="col-md-3 team-grid">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/t3.jpg" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="animate-head">
						     			<div class="animate-head-left">
						     				<h3>ACTUALIZACI&#243;N DE BASES DELICTIVAS</h3>
						     				<span>Secci&#243;n de An&#225;lisis</span>
						     			</div>
						     			<div class="clearfix"> </div>
						     		</div>
						     	</h2>
						  	</div></a>
						  	<div class="t-member-info">
						  			<h5>Secci&#243;n An&#225;lisis</h5>
						  		<span>-DEPEO-</span>
						  	</div>
						</div>
						<div class="col-md-3 team-grid">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/t4.jpg" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="animate-head">
						     			<div class="animate-head-left">
						     				<h3>ELABORACI&#243;N DE GRAFICAS</h3>
						     				<span>SECCI&#243;N DE AN&#225;LISIS</span>
						     			</div>
						     			<div class="clearfix"> </div>
						     		</div>
						     	</h2>
						  	</div></a>
						  	<div class="t-member-info">
						  			<h5>Secci&#243;n An&#225;lisis</h5>
						  		<span>-DEPEO-</span>
						  	</div>
						</div>
					</div>
				</div>
			</div>
			<!-----//End-team---->
			<!-----start-gallery---->
			</br>

			<!-----GIS---->
			<div class="gallery" id="gallery">
				<div class="container">
					<div class="gallery-head text-center">
						<h3>SECCI&#243;N INFORMACI&#243;N GEOGR&#225;FICA (GIS)</h3><span> </span>
						</div>
					<div class="features" id="features">
				<div class="container">
					
					<div class="feature-grids">
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon4"> </span> No. 1</h3>
							<p>Administrar los aspectos de captaci&#243;n, procesamiento y an&#225;lisis de datos en los sistemas y servicio geogr&#225;ficos para la producci&#243;n de informaci&#243;n georeferencial institucional.</p>
						</div>
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon4"> </span>No. 2</h3>
							<p> Definir los est&#225;ndares en el manejo de informaci&#243;n delictiva desde la perpectiva geogr&#225;fica. Coordinar el intercambio de informaci&#243;n interisntitucional susceptible de ser analizada desde el &#225;mbito geogr&#225;fico.</p>
						</div>
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon4"> </span> NO. 3</h3>
							<p>Desarrollar servicios Web de mapas din&#225;micos a trav&#233;s de la red inform&#225;tica local. Proveer an&#225;lisis geogr&#225;ficos a las dependencias operativas que no tengan conectividad con la red institucional.</p>
						</div>
						<div class="col-md-3 feature-grid">
							<h3><span class="fea-icon4"> </span>NO. 4</h3>
							<p>Capacitar a los usuarios del sistema en el uso de las herramientas de anlisis georeferencial y equipos del Sistema de Posicionamiento Global (GPS) para recolecci&#243;n de informaci&#243;n.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>

					<div class="gallery-grids">
						<!----files-rquired-for-image-hover-effects----->
						<link rel="stylesheet" type="text/css" href="css/component.css" />
						<script src="js/modernizr.custom.js"></script>
						<script src="js/toucheffects.js"></script>
						<!----//files-rquired-for-image-hover-effects----->
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g1.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span> &#193;REAS ROJAS</span>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g2.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span>RELOJ DATOS (INCIDENCIA CRIMINAL)</span>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g3.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span>MAPA TEMATICO</span>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g4.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span>GEOREFERENCIACI&#211;N</span>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g5.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span>PLOTEAR DELITOS</span>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g8.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span>DELIMITACI&#211;N AREAS URBANAS</span>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g6.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span>CREACI&#211;N POLIGONOS</span>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/g7.jpg" alt="img02">
								<figcaption>
									<h3>-GIS-</h3>
									<span>MAPA PARLANTE</span>
								</figcaption>
							</figure>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-----//End-gallery---->
			<!-----start-pricing-plans---->


			<!-----PLANIFICACION---->
			<div class="pricing-plans" id="pricing">
				<div class="container">
					<div class="pricing-plans-head text-center">
						<h3>SECCI&#211;N DE PLANIFICACI&#211;N</h3><span> </span>
					</div>
					<div class="pricing-plan-grids">
						<div class="col-md-6">
						 <div class="pricing-plan-grid">
							<div class="col-md-5 pricing-plan-grid-left text-center">
								<span class="p-icon1"> </span>
								<h4>FUNCIONES</h4>
								
							</div>
							<div class="col-md-7 pricing-plan-grid-right">
								<ul class="list-unstyled">
									<li><span> </span><a href="#">Definir el marco estrat&#233;gico de las operaciones policiales de mediano plazo</a></li>
									<li><span> </span><a href="#">Estandarizar modelos de planificaci&#243;n operativa policial de corto y mediano plazo</a></li>
									<li><span> </span><a href="#">Evaluar la efectividad de las dependencias operativas y emitir recomendaciones</a></li>
									
								</ul>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						</div>
						
						<div class="col-md-6">
						 <div class="pricing-plan-grid">
							<div class="col-md-5 pricing-plan-grid-left text-center">
								<span class="p-icon1"> </span>
								<h4>FUNCIONES</h4>
								</div>
							<div class="col-md-7 pricing-plan-grid-right">
								<ul class="list-unstyled">
									
									<li><span> </span><a href="#">Analizar la cobertura de los recursos policiales y emitir criterios de despliegue o redistribuci&#243;n.</a></li>
									<li><span> </span><a href="#">Realizar el monitoreo y registro de eventos trascendentales para el orden y la seguridad p&#250;blica</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						</div>
						<div class="clearfix"> </div>
						<div class="col-md-3 gallery-grid grid cs-style-2">
							<figure>
								<img src="images/gp.jpg" alt="img02">
								<figcaption>
									<h3>-PLANIFICACI&#211;N-</h3>
									<span>PROPUESTAS</span>
								</figcaption>
							</figure>
						</div>
						
					</div>
				</div>
			</div>
			
	<script type="text/javascript">
$(window).load(function() {
	

	$("#flexiselDemo3").flexisel({
		visibleItems: 5,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });
    
});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>
</div>
  <div class="footer">
  	<div class="container">
	   <div class="footer-top">
		    
		 	
			<div class="clearfix"> </div>
		</div>
		<div class="footer-bottom" id="contact">
		  <div class="container contact">
      	  	 <div class="col-md-4 contact-top_left">
			  <h3>Informaci&#243;n de Contacto</h3>
			  <p>Tener comunicaci&#243;n contigo es fundamental para nosotros. As&#237;  que no dudes en buscarnos,  &#233;stos son nuestros datos: 10 calle 13-92 zona 1, Ciudad de Guatemala </p>
			  <ul class="contact_info">
			  	<li><i class="mobile"> </i><span>2500-1131</span></li>
			  	<li><i class="message"> </i><span class="msg">depeojepedi@pnc.gob.gt</span></li>
			  </ul>
	 		 </div>

      		 <div class="col-md-8 contact-top">
			  <h3>Mandanos un Mensaje</h3>
			     <form method="post" action="comentarios.php">
					<div class="to">
                     	<input name="nombre" type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
					 	<input name="correo" type="text" class="text" value="Correo Electr&#243;nico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo Electr&#243;nico';}" style="margin-left:20px">
					 	<input name="empresa" type="text" class="text" value="Empresa" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Empresa';}" style="margin-left:20px">
					 	
					<br>
					<div class="contact_bottom-textarea">
	                   <textarea name="mensaje" value="Mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje';}">Mensaje</textarea>
	                </div>
	                <div class="form-submit1">
			           <input name="submit" type="submit" id="submit" value="Envie su mensaje"><br>
			           <p class="m_msg">Asegurese de poner un correo electr&#243;nico valido</p>
					</div>
					<div class="clear"></div>
                 </form>
             </div>
            </div>
      	    <div class="copy">
		       <p>&copy; Copyright 2016 todos los derechos reservados <a href="http://www.facebook.com/Exson.Cardona" target="_blank"> ESCF</a></p>
		    </div>
          </div>
          <script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
		    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">top </span></a>
			</div>
		</div>
		<!----//End-footer---->
		<!----//End-container---->  
</body>
</html>

