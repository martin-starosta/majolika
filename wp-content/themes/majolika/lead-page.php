<?php
/**
 * Template Name: Lead image page
 *
 * @package majolika
 */

get_header(); ?>
<div class="jumbotron hero about-us leadspace-only">
  <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
		  <?php endwhile; // End of the loop. ?>
  </div>
</div>

<?php get_footer(); ?>