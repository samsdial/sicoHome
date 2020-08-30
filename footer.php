<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="box-connection d-block text-center my-3">
					<h2 class="cl--white txt_size--max">Conecta las áreas de mercadeo, comercial <br> y servicio al cliente de tu negocio.</h2>
				</div>
				<hr class="my-4">
				<ul class="list-group list-group-horizontal list-social justify-content-center">
					<li>
						<a href="" class="d-block px-3 px-md-5">
							<span class="icon icon_face"></span>
						</a>
					</li>
					<li>
						<a href="" class="d-block px-3 px-md-5">
							<span class="icon icon_insta"></span>
						</a>
					</li>
					<li>
						<a href="" class="d-block px-3 px-md-5">
							<span class="icon icon_twit"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-12 text-center py-4">
			<small class="cl--white"><?php understrap_site_info(); ?></small>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>

</html>

