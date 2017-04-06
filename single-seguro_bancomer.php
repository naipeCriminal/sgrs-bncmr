<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
	if( have_rows('slider') ):
		while ( have_rows('slider') ) : the_row();
?>
			<?php $sliderimagen = get_sub_field('slider-imagen'); ?>
			<?php echo $sliderimagen; ?>

			<?php $slidertitulo = get_sub_field('slider-titulo'); ?>
			<?php echo $slidertitulo; ?>

			<?php $sliderdescripcion = get_sub_field('slider-descripcion'); ?>
			<?php echo $sliderdescripcion; ?>

<?php 
		endwhile;
	endif;
?>






<?php 
	if( have_rows('panel') ):
		while ( have_rows('panel') ) : the_row();
?>
			<?php $paneltitulo = get_sub_field('panel-titulo'); ?>
			<?php echo $paneltitulo; ?>

			<?php $panelsubtitulo = get_sub_field('panel-subtitulo'); ?>
			<?php echo $panelsubtitulo; ?>
<?php 
		endwhile;
	endif;
?>


<?php $seguimientoreparacionicono = get_field('seguimientoreparacion-icono'); ?>



<?php $seguimientoreparaciontitulo = get_field('seguimientoreparacion-titulo'); ?>



<?php $seguimientoreparacionsubtitulo = get_field('seguimientoreparacion-subtitulo'); ?>



<?php $seguimientoreparacionbotontxt = get_field('seguimientoreparacion-botontxt'); ?>



<?php $seguimientoreparacionbotonlink = get_field('seguimientoreparacion-botonlink'); ?>



<?php $autoalertaapp = get_field('autoalerta-app'); ?>



<?php $autoalertatitulo = get_field('autoalerta-titulo'); ?>



<?php $autoalertasubtitulo = get_field('autoalerta-subtitulo'); ?>



<?php $autoalertaicnoios = get_field('autoalerta-icnoios'); ?>



<?php $autoalertaicnandroid = get_field('autoalerta-icnandroid'); ?>



<?php $autoalertabotontxt = get_field('autoalerta-botontxt'); ?>



<?php $autoalertabotonlink = get_field('autoalerta-botonlink'); ?>


<h1>seguros bancomer</h1>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			the_title( '<h1 class="entry-title">', '</h1>' ); 







		endwhile;
		?>



		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="background:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+') ; height:450px; width:100%";>
					<div class="container">
						<div class="carousel-caption ">
							<div class="col-md-5 pastillaind">
							<h1 class="grisf-1">Seguro de Autos</h1>
							<p class="grisf-1">Proteger tu auto, así como tu hogar y bienes, cuesta muy poco. Ganar en tranquilidad, ahora es muy acsequible. Infórmate.</p>
						</div>

						</div>
					</div>
				</div>
				<div class="item" style="background:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+') ; height:450px; width:100%";>
					<div class="container">
						<div class="carousel-caption ">
							<div class="col-md-5 pastillaind">
							<h1 class="grisf-1">Seguro de Autos</h1>
							<p class="grisf-1">Proteger tu auto, así como tu hogar y bienes, cuesta muy poco. Ganar en tranquilidad, ahora es muy acsequible. Infórmate.</p>
						</div>

						</div>
					</div>
				</div>
				<div class="item" style="background:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+') ; height:450px; width:100%";>
					<div class="container">
						<div class="carousel-caption ">
							<div class="col-md-5 pastillaind">
							<h1 class="grisf-1">Seguro de Autos</h1>
							<p class="grisf-1">Proteger tu auto, así como tu hogar y bienes, cuesta muy poco. Ganar en tranquilidad, ahora es muy acsequible. Infórmate.</p>
						</div>

						</div>
					</div>
				</div>

			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>


<div class="azul-2">
	<div class="container">
		<div class="space"></div>
		<div class="row">
			<div class="col-md-12">
<?php 
	if( have_rows('tipos-seguros') ):
		while ( have_rows('tipos-seguros') ) : the_row();
?>
			<?php $tipossegurostitulo = get_sub_field('tiposseguros-titulo'); ?>
			

			<?php $tipossegurossubtitulo = get_sub_field('tiposseguros-subtitulo'); ?>
			

			<?php $tipossegurosimagen = get_sub_field('tiposseguros-imagen'); ?>
			

			<?php $tipossegurosbotontxt = get_sub_field('tiposseguros-botontxt'); ?>
			

			<?php $tipossegurosbotonlink = get_sub_field('tiposseguros-botonlink'); ?>


				<div class="col-md-3 col-xs-6">
					<div class="seguros">
						<h3><?php echo $tipossegurostitulo; ?></h3>
						<p><b><?php echo $tipossegurossubtitulo; ?></b></p>
						<div style="background:url('<?php echo $tipossegurosimagen; ?>')" class="img-seguros";>
							<a href="<?php echo $tipossegurosbotonlink; ?>" class=" btn-default btn naranja"><?php echo $tipossegurosbotontxt; ?></a>
						</div>
					</div>
				</div>


			
<?php 
		endwhile;
	endif;
?>
								
			</div>
		</div>
		<div class="space"></div>
	</div>
</div>		

<div class="azul-1">
	<div class="container otros-seguros">
		<div class="row">
			<div class="space"></div>
			<h1 class="text-center">Otros seguros de Autos</h1>
			<div class="space"></div>
			<div class="col-md-6">



<?php 
	if( have_rows('panel') ):
		while ( have_rows('panel') ) : the_row();
?>
			<?php $paneltitulo = get_sub_field('panel-titulo'); ?>
			<?php $panelsubtitulo = get_sub_field('panel-subtitulo'); ?>
				<div class="panel panel-default azul-1">
					<div class="panel-body">
					<h3><?php echo $paneltitulo; ?></h3>
					<p><?php echo $panelsubtitulo; ?></p>
					</div>
				</div>				
<?php 
		endwhile;
	endif;
?>
			</div>


			<div class="col-md-6">
				<div class="panel panel-default seguimiento">
					<div class="panel-body">
						<div class="col-md-2 col-lg-2 col-xs-2 moveimag">
							<img src='<?php echo $seguimientoreparacionicono; ?>'>
						</div>
						<div class="col-md-10 col-lg-10 col-xs-10 control">
							<h2><?php echo $seguimientoreparaciontitulo; ?></h2>
							<p style="font-size: 157%;"><?php echo $seguimientoreparacionsubtitulo; ?></p>
							<a href="<?php echo $seguimientoreparacionbotonlink; ?>">
								<button type="button" class=" btn-default btn naranja reparaciones"><?php echo $seguimientoreparacionbotontxt; ?></button>
							</a>
						</div>
						<div class="space"></div>
					</div>
				</div>
			</div>	
		</div>				
	</div>
				<div class="space"></div>
 </div>

</div>	
<div class="gris-2">
	<div class="container call">
		<div class="space"></div>
		<div class="row">

			<div class="col-md-7">
				<div class="col-md-2 imagen"><img src='<?php echo $autoalertaapp; ?>' alt=""></div>
				<div class="col-md-9">
					<h1 class="grisf-4"><?php echo $autoalertatitulo; ?></h1>
					<p class="grisf-4"><?php echo $autoalertasubtitulo; ?></p>
				</div>	
			</div>
			<div class="col-md-5">
				<div class="col-md-6 col-xs-6">
					<div class="col-lg-6 col-md-7 col-xs-7 imagen"><img src='<?php echo $autoalertaicnoios; ?>' alt=""></div>
					<div class="col-lg-6 col-md-7 col-xs-7 imagen"><img src='<?php echo $autoalertaicnandroid; ?>' alt=""></div>
				</div>
				<div class="col-lg-6 col-md-8 col-xs-7"><a href="<?php echo $autoalertabotonlink; ?>"><h1 class=" btn-default btn naranja" style="margin-top: 32px"><?php echo $autoalertabotontxt; ?></h1></a></div>
			</div>
		</div>
		<div class="space"></div>
	</div>	
</div>
<?php get_footer(); ?>
