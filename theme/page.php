<?php
/**
 * Generic page template.
 *
 * @package WebulaStarter
 */

get_header();
?>
<main class="site-main">
	<div class="container">
		<article <?php post_class( 'card' ); ?>>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</article>
	</div>
</main>
<?php
get_footer();
