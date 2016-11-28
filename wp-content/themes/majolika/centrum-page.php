<?php
/**
 * Template Name: Centrum keremiky
 *
 * @package majolika
 */

get_header(); ?>

<div class="jumbotron hero about-us">
  <div class="container">
    <p class="subheader white-text">Centrum kreatívnej keramiky</p>
  	<p class="header white-text">Rozvíjame zdedené tradície</p>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
			<h1><?= the_title(); ?></h1>

            <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>