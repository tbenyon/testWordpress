<?php
/**
 * Template Name: Panoramic Page
 *
 * @package Squarex
 */

get_header(); ?>

<?php
	if ( get_theme_mod( 'home_tagline' ) ) {
		get_template_part( 'template-parts/home', 'tagline' );
	}
	if ( true === get_theme_mod( 'frontpage_header' ) ) {
		get_template_part( 'template-parts/home', 'hero' );
	}
	if ( true === get_theme_mod( 'frontpage_slider' ) ) {
		squarex_featured_content(); // see template-tags.php
	}
?>

	<div id="primary" class="site-content">
		<main id="main" class="site-main" role="main">

			<h1>
				Hello world!
			</h1>

			<div id="openseadragon1" style="width: 1200px; height: 600px;"></div>
			<script src="/wp-content/themes/squarex-lite/js/openseadragon.min.js"></script>
			<script type="text/javascript">
				var viewer = OpenSeadragon({
					id: "openseadragon1",
					prefixUrl: "http://cdn.creative-assembly.com/dev/Web/Panoramic/newtest_files/",
					tileSources: "http://cdn.creative-assembly.com/dev/Web/Panoramic/newtest.dzi"
				});
			</script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


