<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="gris-2">
	<div class="container call">
		<div class="space"></div>
		<div class="row">

			<div class="col-md-6 col-xs-12">
				<div class="col-md-3 col-xs-4 imagen text-center"><img src="http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/icn_03.png" alt=""></div>
				<div class="col-md-9 col-xs-8">
					<h1 class="grisf-4">AutoAlerta <span class="negritas">Bancomer</span></h1>
					<p class="grisf-4">Descarga la aplicación más útil y reporta el siniestro de tu auto desde tu celular.</p>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="col-md-6 col-xs-12">
					<div class="col-lg-6 col-md-6 col-xs-6 imagen text-center"><img src="http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/icn_07.png" alt=""></div>
					<div class="col-lg-6 col-md-6 col-xs-6 imagen text-center"><img src="http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/icn_09.png" alt=""></div>
				</div>
				<div class="col-lg-6 col-md-8 col-xs-12"><a href="#"><h1 class=" btn-default btn naranja col-xs-12" style="margin-top: 32px">Conóce más de la App</h1></a></div>
			</div>
		</div>
		<div class="space"></div>
	</div>	
</div>

<div class="container footer">
	<div class="row">
		<div class="space"></div>
		<div class="col-md-6 col-xs-12">
			<div class="col-md-6 col-xs-6"><h4>SERVICIOS</h4>
				<ul>
					<li> <a href="#">Comprobantes Fiscales</a> </li> 
					<li> <a href="#">Solicitud de Cambios</a> </li> 
					<li> <a href="#">Directorio de Sucursales</a> </li>
					<li> <a href="#">UNE</a> </li>
					<li> <a href="#">Cancelación de Póliza</a> </li>
				</ul>
			</div>
			<div class="col-md-6 col-xs-6"><h4>CENTRO DE AYUDA</h4>
				<ul>
					<li> <a href="#">Glosario de Términos</a> </li>
					<li> <a href="#">Tips</a> </li>
					<li> <a href="#">En caso de Sinistros</a> </li>
					<li> <a href="#">FAQS</a> </li>
				</ul>
			</div>
		</div>

		<div class="col-md-6 col-xs-12">
			<div class="col-md-6 col-xs-6"><h4>CONTACTO</h4>
				<ul>
					<li> <a href="#">Atención Telefónica</a> </li>
					<li> <a href="#">Chat</a> </li>
					<li> <a href="#">Correo Electrónico</a> </li>
				</ul>
			</div>
			<div class="col-md-6 col-xs-6 sociales"><h4>REDES SOCIALES</h4>
				<ul>
					<li> <a href="#"><img src='http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/sm_34.png' alt=""></a> </li>
					<li> <a href="#"><img src='http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/sm_36.png' alt=""></a> </li>
					<li> <a href="#"><img src='http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/sm_38.png' alt=""></a> </li>
					<li> <a href="#"><img src='http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/sm_40.png' alt=""></a> </li>
				</ul>
			</div>	
		</div>

	</div>
</div>
<div class="menufooter gris-6">
	<div class="container">
		<div class="row">
			<ul>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Aviso de Privacidad</a></li>
				<li><a href="#">Derechos ARCO</a></li>
				<li><a href="#">Seguridad</a></li>
				<li><a href="#">Buró EF</a></li>
				<li><a href="#">Basicos Estandarizados</a></li>
				<li><a href="#">Términos y Condiciones</a></li>
			</ul>
		</div>
	</div>
</div>

		<div class="chat">
		<div class="col-md-3 col-xs-3">
			<img src='http://ec2-54-77-102-116.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/04/icn_11.png'> 
		</div>
		<div class="col-md-8 col-xs-8 hidden-xs">
			<p class="grisf-2"><b>Chat</b></p>
			<span class="grisf-3">07:00 - 22:00 hrs</span>
		</div>
		</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/assets/js/Js.js"></script>

</body>
</html>
<?php wp_footer(); ?>
