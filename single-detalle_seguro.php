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
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>



<?php

    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );    

 ?>


		<div class="jumbotron" style="background:url('<?php echo $imgDestacada; ?>');">

  <div class="container seguro_usa">
  <h1><?php the_title(); ?></h1>
  <?php echo $imgDestacada; ?>
<?php $principal_subtitulo = get_field('principal_subtitulo'); ?>  

  <p><?php echo $principal_subtitulo; ?></p>
    </div>

</div>

<div class="container coberturas">
	<div class="space"></div>
	<div class="row">
		<div class="col-md-12">
			<h2>Coberturas</h2>
			
<?php the_content(); ?>

		</div>
	</div>
</div>



<div class="container coberturas">
	<div class="space"></div>
	<div class="row">
		<div class="col-md-12">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Coberturas <span class="glyphicon glyphicon-chevron-down der" aria-hidden="true"></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <table class="table table-striped">
					        	<thead>
					        		<tr>
					        			<th>Coberturas</th>
					        			<th>Por persona</th>
					        			<th>Por accidente</th>
					        		</tr>
					        	</thead>
					        	<tbody>
<?php 
	if( have_rows('tabla-seguro') ):
		while ( have_rows('tabla-seguro') ) : the_row();
?>
		<tr>
			<td><?php the_sub_field('tabla-cobertura'); ?></td>
			<td><?php the_sub_field('tabla-persona'); ?></td>
			<td><?php the_sub_field('tabla-accidente'); ?></td>
		</tr>
  	
<?php 
		endwhile;
	endif;
?>					        	


					        	</tbody>
					        </table>
      </div>
    </div>
  </div>
  
</div>	
</div>
</div>
</div>



<div class="azul-1">
	<div class="container otros-seguros">
		<div class="row">
		<?php 
	if( have_rows('informacion-interes') ):
		while ( have_rows('informacion-interes') ) : the_row();
			?>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div id="a" class="marcoB">
					<div Class="panel-body">

				      	<ul><h4><?php the_sub_field('titulo-informacion'); ?></h4></ul>
				        <?php the_sub_field('informacion-contenido'); ?>
				    </div>
			    </div>
		    </div>
		   <?php 
		endwhile;
	endif;
?>	
		</div>				
	</div>
 </div>

		<?php

		endwhile;
		?>
<?php get_footer(); ?>
