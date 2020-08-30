<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>
<section class="w-100 overflow-hidden position-relative bgi bgi_ondas">
<!-- ***CONTAINER*** -->
	<div class="container py-5">
		<!-- /// Initial -- Register // -->
		<div class="row py-5">
			<div class="col-12 col-lg-6 mb-5 mb-lg-0">
				<div class="box_intro pt-lg-5">
					<div class="title mb-4 mt-lg-5">
						<h2 class="cl-second txt_size--max txt_bold700 text-uppercase mb-1">
<?php the_field( 'title' ); ?></h2>
					</div>
					<div class="title mb-2">
						<h2 class="txt_size--em3 txt_bold700 text-uppercase"><?php the_field( 'marca' ); ?></h2>
					</div>
					<div class="subtitle mb-3">
						<h3 class="cl-second txt_size--em1">
<?php the_field( 'sub_title' ); ?> </h3>
					</div>
					<div class="paragraf">
						<p>
							<?php the_field( 'paragraf' ); ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mt-5 mb-lg-0">
				<div class="box_register">
					<div class="title text-center mb-3">
						<h2 class="cl-second txt_size--med txt_bold700 text-uppercase">
							<?php the_field( 'form_title_1' ); ?><br> <?php the_field( 'form_title_2' ); ?>
							<span class="cl-primary d-block"><?php the_field( 'form_acction' ); ?></span>
						</h2>
					</div>
					<div class="box_form d-block px-3 pt-2">
						<span><?php the_field( 'form' ); ?></span>
						<style type="text/css" media="screen">
							.screen-reader-response {
								display: none;
							}
							.wpcf7-response-output {
								text-align: center;

							}
							@media (max-width: 531px) {
								.wpcf7 .wpcf7-form p label {
								    width: 100%;
								}
							}
						</style>
					</div>
				</div>
			</div>
		</div>
		<div class="container py-5">
			<div class="row">
				<div class="col-12 col-lg-6 mb-3 mb-lg-0">
					<div class="box-figure">
						<figure>
							<?php if ( get_field( 'img' ) ) : ?>
								<img class="img-fluid" src="<?php the_field( 'img' ); ?>" />
							<?php endif ?>
						</figure>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="title mb-4">
						<h2 class="cl--white txt_size--max txt_bold700 text-uppercase">
							<?php the_field( 'title_gestion' ); ?>
						</h2>
					</div>
					<ul class="cl--white">
						<li class="mb-3">
							<span class="icon icon_increase align-top pt-1 mr-2"></span>
							<p class="d-inline-block txt_lineh--em1 w-70"><?php the_field( 'gestion_1' ); ?></p>
						</li>
						<li class="mb-3">
							<span class="icon icon_leads align-top pt-1 mr-2"></span>
							<p class="d-inline-block txt_lineh--em1 w-70"><?php the_field( 'gestion_2' ); ?></p></li>
						<li class="mb-3">
							<span class="icon icon_funnel align-top pt-1 mr-2"></span>
							<p class="d-inline-block txt_lineh--em1 w-70"><?php the_field( 'gestion_3' ); ?></p></li>
						<li class="mb-3">
							<span class="icon icon_report align-top pt-1 mr-2"></span>
							<p class="d-inline-block txt_lineh--em1 w-70"><?php the_field( 'gestion_4' ); ?></p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /// Initial -- Register // -->
	</div>
	<!-- ***CONTAINER*** -->
	<div></div>

</section>
<?php
get_footer();
