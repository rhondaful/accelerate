<?php
/**
 * The template for displaying the homepage
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

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies/">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<!-- .featured-work -->
<section class="featured work">
	<div class="site-content">
		<h4>Featured Work</h4>
		
		<ul class="homepage-featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post();
		           $image_1=get_field("image_1");
		           $image_2=get_field("image_2");
		           $image_3=get_field("image_3");
		           $size="medium";
		           ?>

		           <li class="individual-featured-work">
			           	<figure>
			           		<?php echo wp_get_attachment_image( $image_1, $size ); ?>
			           </figure>

			           <h3><a href="<?php the_permalink(); ?>" class="read-more-link" ><?php the_title(); ?></a></h3>
			       </li>
			    <?php endwhile; ?> 
			<?php wp_reset_query(); ?>
		</ul>	
	</div>

</section><!-- end .featured-work -->

<!-- .services -->
<section class="services">
	<div class="site-content">
		<h4>Our Services</h4>
			<ul class="homepage-services">
			<?php query_posts('post_type=services'); ?>
				<?php while ( have_posts() ) : the_post();
		           $service_image=get_field('service_image');
		           $size="thumbnail";
		           ?>

		           <li class="individual-services">
			           	<figure>
			           		<?php echo wp_get_attachment_image( $service_image, $size ); ?>
			           </figure>

			           <h7><a href="<?php the_permalink(); ?>" class="read-more-link" ><?php the_title(); ?></a></h7>
			       </li>
			    <?php endwhile; ?> 
			<?php wp_reset_query(); ?>
		</ul>
	</div>

</section><!-- .services -->



<!-- .blog-posts -->
<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
	         		<h2><?php the_title(); ?></h2>
	         		<?php the_excerpt(); ?> 
		      		<a href="<?php the_permalink(); ?>" class="read-more-link" >Read More <span>&rsaquo;</span></a>
					<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
		</div>
	</div>
</section><!-- .recent-posts -->

<!-- Twitter Feed -->
<section class="recent-tweets">
	<div class="site-content">
		<div class="twitter-feed">
			<h4>Recent Tweet</h4>
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
				<?php endif; ?>
		</div>
	</div>
</section>
<!-- .twitter-feed -->






<?php get_footer(); ?>