<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="error-text">
				<h3>EEK! Somethin's done gone amuck!</h3>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/happy-cow.jpg"/>
				<p><center>What you're looking for ain't here no more. It must've moved.</p>
				<h4>Or it died.<h4>
				<p>We didn't mean to pull your leg like that.You're welcomed to mosey around, see if there's anything you want to chew the cudd about.</center></p>
			</div>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
