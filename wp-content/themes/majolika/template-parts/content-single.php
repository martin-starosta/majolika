<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package majolika
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'is-loop' ); ?>>
<div class="row">
	<div class="col-lg-12">
		<h2 class="post-title"><?= the_title(); ?></h2>
		<p><?= get_post_custom_values( 'zdroj' )[0] ?></p>
	
		<div class="post-content">
			<?= the_content(); ?>
		</div>
	</div>
</div>
</article><!-- #post-## -->

