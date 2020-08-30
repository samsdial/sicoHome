<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<section class="w-100 overflow-hidden position-relative bgi bgi_ondas">
	<!-- ***CONTAINER*** -->
	<div class="container py-5">
		<!-- /// Initial -- Register // -->
		<div class="row py-5">
			<div class="col-12 col-lg-6 mb-5 mb-lg-0">
				<div class="box_intro pt-lg-5">
					<div class="title mb-4 mt-lg-5">
						<h2 class="cl-second txt_size--max txt_bold700 text-uppercase mb-1"> Atrae, vende y mide <br> en una  sola plataforma</h2>
					</div>
					<div class="title mb-2">
						<h2 class="txt_size--em3 txt_bold700 text-uppercase"> CRM - SICO </h2>
					</div>
					<div class="subtitle mb-3">
						<h3 class="cl-second txt_size--em1"> Un Software creado a la medida del sector inmobiliario</h3>
					</div>
					<div class="paragraf">
						<p>La plataforma de gestión de clientes para tus proyectos inmobiliarios que integra información para entenderlos mejor y tomar decisiones oportunas y confiables.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mt-5 mb-lg-0">
				<div class="box_register">
					<div class="title text-center mb-3">
						<h2 class="cl-second txt_size--med txt_bold700 text-uppercase">
							Para mayor información sobre <br> nuestro CRM inmobiliario
							<span class="cl-primary d-block">Registrarte aquí</span>
						</h2>
					</div>
					<div class="box_form d-block px-3 pt-2">
						<form id="restister" onsubmit="return false;">
							<div class="row mb-2">
								<div class="col-12 col-lg-6">
									<label for="">
									<span class="icon icon_user align-baseline"></span>
									<span class="txt_font--second txt_size--min align-baseline">*Nombre y Apellido</span>
									</label>
									<input type="text" class="form-control name" id="name" name="name">
									<small class="error d-none form-text text-muted">Agregué su nombre completo.</small>
								</div>
								<div class="col-12 col-lg-6">
									<label for="">
										<span class="icon icon_phone align-baseline"></span>
										<span class="txt_font--second txt_size--min align-baseline">
											*Telefono/Móvil
										</span>
									</label>
									<input type="text" class="form-control phone" id="phone" name="phone">
									<small class="error d-none form-text text-muted">Ingrese su numero telefónico.</small>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-lg-6">
									<label for="" >
										<span class="icon icon_email align-baseline"></span>
										<span class="txt_font--second txt_size--min align-baseline">
											*Correo electronico
										</span>
									</label>
									<input type="text" class="form-control email" id="email" name="email">
									<small class="error d-none form-text text-muted">Ingrese un email valido.</small>
								</div>
								<div class="col-12 col-lg-6">
									<label for="">
										<span class="icon icon_bulding align-baseline"></span>
										<span class="txt_font--second txt_size--min align-baseline">*Nombre de la empresa</span>
									</label>
									<input type="text" class="form-control business" id="business" name="business">
									<small class="error d-none form-text text-muted">Ingrese el nombre de la empresa.</small>
								</div>
							</div>
							<div class="row pt-3">
								<div class="col-12 text-center py-2">
									<a href="#" class="txt_size--min link">*Politica de tratamiento de datos</a>
								</div>
								<div class="col-12 text-center">
									<div class="form-group">
										<div class="form-check txt_font--second text-center">
											<input class="form-check-input aceptar" type="checkbox" id="aceptar">
											<label class="form-check-label txt_size--min" for="gridCheck">
												*Si, acepto la politica de privacidad de datos
											</label>
											<small class="error d-none form-text text-muted">Debe aceptar nuestra política de tratamiento de datos.</small>
										</div>
									</div>
								</div>
								<div class="col-12 text-center">
									<button type="submit" id="submit" class="btn btn_site">Enviar Formulario</button>
									<div class="alerta">
										<p></p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /// Initial -- Register // -->
	</div>
	<!-- ***CONTAINER*** -->
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-lg-6 mb-3 mb-lg-0">
				<div class="box-figure">
					<figure>
						<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/images/png/gestion.png" alt="gestion">
					</figure>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="title mb-4">
					<h2 class="cl--white txt_size--max txt_bold700 text-uppercase">
						¡Gestiona las interacciones <br> con tus clientes <br> de principio a fin!
					</h2>
				</div>
				<ul class="cl--white">
					<li class="mb-3">
						<span class="icon icon_increase align-top pt-1 mr-2"></span>
						<p class="d-inline-block txt_lineh--em1 w-70">Aumenta el número de clientes potenciales</p>
					</li>
					<li class="mb-3">
						<span class="icon icon_leads align-top pt-1 mr-2"></span>
						<p class="d-inline-block txt_lineh--em1 w-70">Mejora tus ventas con procesos de perfilación de leads</p></li>
					<li class="mb-3">
						<span class="icon icon_funnel align-top pt-1 mr-2"></span>
						<p class="d-inline-block txt_lineh--em1 w-70">Construye y refuerza la relación comercial con tus clientes a través del funnel comercial.</p></li>
					<li class="mb-3">
						<span class="icon icon_report align-top pt-1 mr-2"></span>
						<p class="d-inline-block txt_lineh--em1 w-70">Aumenta el número de clientes potenciales</p></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
