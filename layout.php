<?php
session_start();
$obj = new plantilla();
class plantilla{
	function __construct(){
		?>
		<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width-device-width, initial-scale=0.8' >
<title>Solarize by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

</head>
<body class="homepage">
<!--
<!-- Header Wrapper -->
			<div class="wrapper style1">
			
			<!-- Header -->
				<div id="header">
					<div class="container">
							
						<!-- Logo -->
							<h1><a href="#" id="logo">Solarize</a></h1>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="index.php">Inicio</a></li>
								<?php
								if(isset($_SESSION['user'])){
									 echo "<li><a href=''>Categorias</a></li>";
									 echo "<li><a href=''>".$_SESSION['user']."</a></li>";
									 echo "<li><a href=''>Nosotros</a></li>";
									 echo "<li><a href='salir.php'>Salir</a></li>";
									
									
								}else{
									 echo "<li><a href='registro.php'>Registrarse</a></li>"; 
									 echo"<li><a href='login.php'>Iniciar Sesion</a></li>"; 
										
									
								}
								       
										?>
								</ul>
							</nav>
	
					</div>
				</div>
-->

		<?php
	}
	function __destruct(){		
		?>	
		<style>
.contenedor{
height:500px;
background-color:white;		
}
.boton{
	width:100%;
	height:40px;
	border-radius:10%;
	background-color:blue;
	color:white;
}
</style>
<!--footer -->
<div id="footer">
			<section class="container">
				<header class="major">
					<h2>Connect with us</h2>
					<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
				</header>
				<ul class="icons">
					<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
					<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
				</ul>
				<hr />
			</section>
			
			<!-- Copyright -->
				<div id="copyright">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>			
		</div>
	<!-- fin del footer-->
</body>
</html>
		<?php
	}
}
?>