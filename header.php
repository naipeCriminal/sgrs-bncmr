<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/custom.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->	
		<?php wp_head(); ?>
</head>
<body>
	<div class="degradado">
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default mseguros">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#"><span class = "imghead home"></span></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav mov">

			        <li><a href="#"><span class = "imghead dona"></span><span class="sr-only">(current)</span></a></li>

			        <li><a href="#"><span class = "imghead auto"></span>Autos</a></li>

			        <li><a href="#"><span class = "imghead bienes"></span>Bienes</a></li>

			        <li><a href="#"><span class = "imghead vida"></span>Vida y Familia</a></li>

			        <li><a href="#"><span class = "imghead accidentes"></span>Accidentes y Enfermedades</a></li>

			        <li><a href="#"><span class = "imghead salud"></span>Salud y GMM</a></li>

			        <li><a href="#"><span class = "imghead pimes"></span>Pymes</a></li>

			        <li><a href="#"><span class = "imghead empresas"></span>Empresas</a></li>
			      </ul>


			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>		
			
		</div>
	</div>	
</div>	