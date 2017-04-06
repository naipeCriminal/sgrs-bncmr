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
	if( have_rows('tipos-seguros') ):
		while ( have_rows('tipos-seguros') ) : the_row();
?>
			<?php $tipossegurostitulo = get_sub_field('tiposseguros-titulo'); ?>
			<?php echo $tipossegurostitulo; ?>

			<?php $tipossegurossubtitulo = get_sub_field('tiposseguros-subtitulo'); ?>
			<?php echo $tipossegurossubtitulo; ?>

			<?php $tipossegurosimagen = get_sub_field('tiposseguros-imagen'); ?>
			<?php echo $tipossegurosimagen; ?>

			<?php $tipossegurosbotontxt = get_sub_field('tiposseguros-botontxt'); ?>
			<?php echo $tipossegurosbotontxt; ?>

			<?php $tipossegurosbotonlink = get_sub_field('tiposseguros-botonlink'); ?>
			<?php echo $tipossegurosbotonlink; ?>	
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
<?php echo $seguimientoreparacionicono; ?>


<?php $seguimientoreparaciontitulo = get_field('seguimientoreparacion-titulo'); ?>
<?php echo $seguimientoreparaciontitulo; ?>


<?php $seguimientoreparacionsubtitulo = get_field('seguimientoreparacion-subtitulo'); ?>
<?php echo $seguimientoreparacionsubtitulo; ?>


<?php $seguimientoreparacionbotontxt = get_field('seguimientoreparacion-botontxt'); ?>
<?php echo $seguimientoreparacionbotontxt; ?>


<?php $seguimientoreparacionbotonlink = get_field('seguimientoreparacion-botonlink'); ?>
<?php echo $seguimientoreparacionbotonlink; ?>


<?php $autoalertaapp = get_field('autoalerta-app'); ?>
<?php echo $autoalertaapp; ?>


<?php $autoalertatitulo = get_field('autoalerta-titulo'); ?>
<?php echo $autoalertatitulo; ?>


<?php $autoalertasubtitulo = get_field('autoalerta-subtitulo'); ?>
<?php echo $autoalertasubtitulo; ?>


<?php $autoalertaicnoios = get_field('autoalerta-icnoios'); ?>
<?php echo $autoalertaicnoios; ?>


<?php $autoalertaicnandroid = get_field('autoalerta-icnandroid'); ?>
<?php echo $autoalertaicnandroid; ?>


<?php $autoalertabotontxt = get_field('autoalerta-botontxt'); ?>
<?php echo $autoalertabotontxt; ?>


<?php $autoalertabotonlink = get_field('autoalerta-botonlink'); ?>
<?php echo $autoalertabotonlink; ?>

<h1>seguros bancomer</h1>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			the_title( '<h1 class="entry-title">', '</h1>' ); 







		endwhile;
		?>
<?php get_footer(); ?>
