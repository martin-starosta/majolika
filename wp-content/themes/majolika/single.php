<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package refur
 */

get_header(); 

$leadimage = get_post_custom_values( 'leadimage' )[0];
if($leadimage === null) {
	$leadimage = 'banner-o-nas.jpg';
}

?>

<div class="hero-small">
	<img src="<?= get_stylesheet_directory_uri(); ?>/media/<?= $leadimage ?>"/>
</div>

<div class="container">
  <div class="row">
	<div id="primary" class="content-area col-md-8 col-sm-12 col-xs-12">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				/*refur_posts_navigation(
					array(
						'<span>' . __( 'Prev', 'refur' ) . '</span>%title',
						'<span>' . __( 'Next', 'refur' ) . '</span>%title',
					)
				);*/
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="col-md-4 col-sm-12 col-xs-12">
		<?php get_sidebar(); ?>
	</div>
  </div>
</div>
<?php get_footer(); ?>
