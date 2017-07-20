<?php
/* Template Name: About Me */

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

<section class="about-hero">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero-text'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .page-about -->


	<div id="primary" class="site-content">
<section class="service-items">
        <div class="service-overview">
          <h5> <?php echo get_field ('services_title') ?> </h5>
            <p> <?php echo get_field ('services_text') ?> </p>
        </div>


        <?php query_posts("post_type=services");
        while (have_posts()) :
        the_post();
        ?>

        <article class="service-item">
          <figure class="about-icon">  <?php echo wp_get_attachment_image( get_field('service_image'), 'full' ); ?> </figure>
          <div class="service-text">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p>  <?php echo get_field ('service_description') ?> </p>
          </div>
        </article>


      <?php endwhile; // end of the loop. ?>
      <?php wp_reset_query(); // resets the altered query back to the original ?>


</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>