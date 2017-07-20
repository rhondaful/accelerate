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

<section class="about">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

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

</section><!-- .featured-work -->

<section class="services">
	<div class="site-content">
		<h4>Our Services</h4>

			<h7>Content Strategy</h7>

			<h7>Influence Mapping</h7>

			<h7>Social Media Strategy</h7>

			<h7>Design & Development</h7>
	
	</div>

</section>
<!--<!-- 
<section class="services-section">
	<div class="about-services">
		<h6 class="our-services">Our Services</h6>
		<p class="services-subtitle">We take pride in our clients and the content we create for them. Here's a brief overview of the offered services.</p>
	</div>
	<div class="one-service-container">
		<div class="single-service">
			<div class="service-icon" id="bullseye"><!--<img src="img/bullseye.png">--><!-- </div>
			<div class="service-text">
			<h2 class="service-title-text">Content Strategy</h2>
			<p class="service-description">Selfies ramps semiotics whatever beard, franzen gochujang iceland meggings pork belly. Cliche unicorn +1 stumptown roof party. Squid taxidermy leggings, fixie forage tattooed master cleanse edison bulb schlitz synth banjo gluten-free keytar. Raclette ennui woke everyday carry brooklyn. </p>
			</div>			
		</div>
	</div>
</section> -->

<!-- .services -->

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

<section class="twitter-feed">
	<div class="site-content">
		<h4>Recent Tweets</h4>

			
	
	</div>
</section><!-- .twitter-feed -->






<?php get_footer(); ?>