<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package majolika
 */

$leadimage = get_post_custom_values( 'leadimage' )[0];
if($leadimage === null) {
	$leadimage = 'banner-o-nas.jpg';
}
get_header(); ?>

<div class="hero-small">
	<img src="<?= get_stylesheet_directory_uri(); ?>/media/<?= $leadimage ?>"/>
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