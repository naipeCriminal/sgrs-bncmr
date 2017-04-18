<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<h1>single detalle</h1>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>


		<div class="jumbotron">
  <div class="container seguro_usa">
  <h1>AutoSeguro USA Bancomer</h1>
  <p>No cruzo los dedos, ¡Cruza seguro a EEUU y Canadá!<br>Evita multas innesesarias. Llama al 01800 723 6872</br></p>
    </div>
</div>


<div class="container coberturas">
	<div class="space"></div>
	<div class="row">
		<div class="col-md-12">
			<h2>Coberturas</h2>
			<ul>
				<li><span class="azulf-3">Responsabilidad Civil Personas:</span>   ampara las lesiones que se puedan ocasionar a terceros en sus personas.</li>
				<li><span class="azulf-3">Responsabilidad Civil Bienes:</span>   ampara los daños que se puedan ocasionar a los bienes de terceras personas.</li>
				<li><span class="azulf-3">Gastos Médicos a Ocupates:</span>   cubre los daños al asegurado o a cualquier persona ocupante del vehículo asegurado en accidentes de tránsito.</li>
				<li><span class="azulf-3">Asistencia en Viajes:</span>   servicio de grúa, suministro de gasolina, cambio de llanta, asistencia legal y administradtiva, servicio de conserjería, asistencia médica telefónica</li>
			</ul>
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
					        		<tr>
					        			<td>Responsabilidad Civil Personas</td>
					        			<td>$50,000 USD</td>
					        			<td>$100,000 USD</td>
					        		</tr>
					        		<tr>
					        			<td>Responsabilidad Civil Bienes</td>
					        			<td>n/a</td>
					        			<td>$50,000 USD</td>
					        		</tr>
					        		<tr>
					        			<td>Gastos Médicos a los Ocupantes</td>
					        			<td>$2,000 USD</td>
					        			<td>$10,000 USD</td>
					        		</tr>
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
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div id="a" class="marcoB">
					<div Class="panel-body">
				      <ul>
				      	<h4>Beneficios</h4>
				        <li>Puedes viajar tranquilo</li>
				        <li>Evitarás sanciones innecesarias por no cumplir con la ley de Estados Unidos y Canadá.</li>
				        <li>Podrás disfrutar del Servicio de Asistencia en Viajes.</li>
				        <li>Puedes registrar hasta cuatro conductores adicionales en la misma póliza.</li>
				      </ul>
				    </div>
			    </div>
		    </div>
		   	<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="marcoB">
					<div Class="panel-body">
					      <ul>
					      	<h4>Características</h4>
					        <li>Compra segura y sencilla a través de Internet, o si lo prefieres en sucursales Bancomer y Tiendas Oxxo.</li>
					        <li>Contarás con coberturas como Responsabilidad Civil contra Daños a Terceros y Gastos Médicos a Ocupantes.</li>
					        <li>Puedes pagar con cualquier tarjeta de crédito Bancomer Visa, Master-Card o American Express.</li>
					      </ul>
				      </div>
			    </div>
		    </div>
		   	<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="marcoB">
				    <div Class="panel-body">
				      <ul>
				      	<h4>Requisitos</h4>
				      	<b>Políticas de contratación:</b>
				        <li>Sólo para personas de nacionalidad diferente al país que visita.</li>
				        <li>El contratante y los conductores adicionales deben tener entre 18 y 70 años.</li>
				        <li>Para autos y Pick Ups con antigüedad menor a 15 años.</li>
				        <li>Para autos de uso normal y servicio particular y no destinados al servicio público (taxis, colectivos…).</li>
				        <li>Para autos con placas nacionales o fronterizas.</li>
				      </ul>
				    </div>
			    </div>
		    </div>
		</div>				
	</div>
 </div>



<?php
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>
