<?php
/**
 * Starter theme header.
 *
 * @package WebulaStarter
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="topbar">
		<div class="container topbar-inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="<?php esc_attr_e( 'Leadoscope — home', 'webula-starter' ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" decoding="async" />
			</a>

			<div class="nav-wrap">
				<nav class="nav" aria-label="<?php esc_attr_e( 'Main navigation', 'webula-starter' ); ?>">
					<a href="<?php echo esc_url( home_url( '/#features' ) ); ?>"><?php esc_html_e( 'Features', 'webula-starter' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/service/' ) ); ?>"><?php esc_html_e( 'Service', 'webula-starter' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'webula-starter' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php esc_html_e( 'FAQ', 'webula-starter' ); ?></a>
					<a href="#" class="js-open-login"><?php esc_html_e( 'Sign In', 'webula-starter' ); ?></a>
				</nav>
				<a href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Try for free', 'webula-starter' ); ?></a>
			</div>
		</div>
	</header>
