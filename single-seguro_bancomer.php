<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

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
		<div id="carousel-id" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">				
<?php
$i=0;
	if( have_rows('slider') ):
		while ( have_rows('slider') ) : the_row();
?>
			<?php $sliderimagen = get_sub_field('slider-imagen'); ?>		
			<?php $slidertitulo = get_sub_field('slider-titulo'); ?>
			<?php $sliderdescripcion = get_sub_field('slider-descripcion'); ?>
			
			<div class="item<?php if ($i==0) {echo ' active';} ?>" style="background:url('<?php echo $sliderimagen; ?>') ;background-size:cover ; height:450px; width:100%";>
				<div class="container">
					<div class="carousel-caption ">
						<div class="col-md-5 pastillaind">
						<h1 class="grisf-1"><?php echo $slidertitulo; ?></h1>
						<p class="grisf-1"><?php echo $sliderdescripcion; ?></p>
					</div>

					</div>
				</div>
			</div>
<?php
$i++;
		endwhile;
	endif;
?>
			</div>
			<ol class="carousel-indicators">
				<?php for ($j=0; $j < $i; $j++) { ?>
					<li data-target="#carousel-id" data-slide-to="<?php echo $j; ?>" class="<?php if ($j==0) {echo ' active';} ?>"></li>	
				<?php  } ?> 
			</ol>
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
						<div style="background:url('<?php echo $tipossegurosimagen; ?>'); background-size: cover;" class="img-seguros";>
						<?php if ($tipossegurosbotonlink != '') { ?>
							<a href="<?php echo $tipossegurosbotonlink; ?>" class=" btn-default btn naranja"><?php echo $tipossegurosbotontxt; ?></a>
						<?php } ?>
							
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
							<a href="<?php echo $seguimientoreparacionbotonlink; ?>" class="text-center">
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
<!-- <div class="gris-2">
	<div class="container call">
		<div class="space"></div>
		<div class="row">

			<div class="col-md-6 col-xs-12">
				<div class="col-md-3 col-xs-4 imagen text-center"><img src='<?php echo $autoalertaapp; ?>' alt=""></div>
				<div class="col-md-9 col-xs-8">
					<h1 class="grisf-4"><?php echo $autoalertatitulo; ?></h1>
					<p class="grisf-4"><?php echo $autoalertasubtitulo; ?></p>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="col-md-6 col-xs-12">
					<div class="col-lg-6 col-md-6 col-xs-6 imagen text-center"><img src='<?php echo $autoalertaicnoios; ?>' alt=""></div>
					<div class="col-lg-6 col-md-6 col-xs-6 imagen text-center"><img src='<?php echo $autoalertaicnandroid; ?>' alt=""></div>
				</div>
				<div class="col-lg-6 col-md-8 col-xs-12"><a href="<?php echo $autoalertabotonlink; ?>"><h1 class=" btn-default btn naranja col-xs-12" style="margin-top: 32px"><?php echo $autoalertabotontxt; ?></h1></a></div>
			</div>
		</div>
		<div class="space"></div>
	</div>	
</div> -->
<?php get_footer(); ?>
