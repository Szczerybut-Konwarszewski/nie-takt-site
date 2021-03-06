<?php
/**
 * Template Name: sk_contact
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<style>
	.custom-header{
		background-image: url("http://localhost/wordpress/wp-content/uploads/2017/01/site_test_bg_2.png");
		background-size: cover;
	}
	.site-header{
		height: 100vh;
		width: auto;
	}

</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<!-- DUMMY CONTENT IS WELCOMED -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php wp_footer();