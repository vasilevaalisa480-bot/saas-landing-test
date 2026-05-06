<?php
/**
 * Service page template.
 *
 * @package WebulaStarter
 */

get_header();
?>
<main>
	<section class="service-hero" aria-labelledby="service-hero-title">
		<div class="container hero-grid">
			<div>
				<h1 id="service-hero-title"><?php esc_html_e( 'A lighter CRM focused on inbound website requests', 'leadoscope' ); ?></h1>
				<p class="lead">
					<?php esc_html_e( 'Leadoscope is built for service businesses that need a simple way to capture, process, and analyze leads from their websites without rolling out a bulky enterprise CRM.', 'leadoscope' ); ?>
				</p>
				<div class="service-hero-actions">
					<a href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Request a demo', 'leadoscope' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" class="btn btn-outline"><?php esc_html_e( 'View dashboard', 'leadoscope' ); ?></a>
				</div>
			</div>
			<div>
				<div class="hero-shot service-hero-shot" role="img" aria-label="<?php esc_attr_e( 'CRM dashboard illustration placeholder', 'leadoscope' ); ?>">
					<?php esc_html_e( 'Dashboard preview placeholder', 'leadoscope' ); ?>
				</div>
				<p class="service-hero-caption"><?php esc_html_e( 'Replace in WordPress with a real product screenshot.', 'leadoscope' ); ?></p>
			</div>
		</div>
	</section>

	<section class="service-benefits" id="benefits" aria-labelledby="benefits-title">
		<div class="container">
			<h2 id="benefits-title"><?php esc_html_e( 'What the service solves day to day', 'leadoscope' ); ?></h2>
			<p class="section-subtitle"><?php esc_html_e( 'The product starts with lead capture and accountability, then expands into team visibility and simple operational analytics.', 'leadoscope' ); ?></p>
			<div class="service-benefits-grid">
				<article class="card">
					<div class="service-benefit-icon" aria-hidden="true">1</div>
					<h3><?php esc_html_e( 'Every lead enters one queue', 'leadoscope' ); ?></h3>
					<p><?php esc_html_e( 'No more guessing whether a website form was delivered, replied to, or forgotten in someone’s inbox.', 'leadoscope' ); ?></p>
				</article>
				<article class="card">
					<div class="service-benefit-icon" aria-hidden="true">2</div>
					<h3><?php esc_html_e( 'Managers work from shared statuses', 'leadoscope' ); ?></h3>
					<p><?php esc_html_e( 'A compact workflow makes it obvious what is new, what is in progress, and what was won or lost.', 'leadoscope' ); ?></p>
				</article>
				<article class="card">
					<div class="service-benefit-icon" aria-hidden="true">3</div>
					<h3><?php esc_html_e( 'Source tracking stays visible', 'leadoscope' ); ?></h3>
					<p><?php esc_html_e( 'Keep the page or form source on every lead so you can compare channels and understand which traffic actually converts.', 'leadoscope' ); ?></p>
				</article>
				<article class="card">
					<div class="service-benefit-icon" aria-hidden="true">4</div>
					<h3><?php esc_html_e( 'Integration stays simple', 'leadoscope' ); ?></h3>
					<p><?php esc_html_e( 'The primary setup flow is just changing the HTML form action to the service endpoint with an API key.', 'leadoscope' ); ?></p>
				</article>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
