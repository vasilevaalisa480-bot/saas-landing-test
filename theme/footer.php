<?php
/**
 * Starter theme footer.
 *
 * @package WebulaStarter
 */
?>
	<?php do_action( 'webula_before_footer' ); ?>
	<footer class="footer">
		<div class="container footer-inner">
			<div>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'webula-starter' ); ?></div>
			<div><?php esc_html_e( 'Mini CRM for website leads and growing service teams.', 'webula-starter' ); ?></div>
		</div>
	</footer>
	<?php get_template_part( 'template-parts/login', 'modal' ); ?>
</div>
<?php do_action( 'webula_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
