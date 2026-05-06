<?php
/**
 * Front page template.
 *
 * @package WebulaStarter
 */

get_header();
?>
<main>
	<section class="hero">
		<div class="container hero-grid">
			<div>
				<h1><?php esc_html_e( 'All website leads in one simple cabinet', 'leadoscope' ); ?></h1>
				<p>
					<?php esc_html_e( 'Leadoscope helps service companies collect every incoming lead from their website, assign responsibility, track outcomes, and see who is really processing requests on time.', 'leadoscope' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Start Free Trial', 'leadoscope' ); ?></a>
			</div>
			<div class="hero-shot" role="img" aria-label="<?php esc_attr_e( 'CRM dashboard preview placeholder', 'leadoscope' ); ?>">
				<?php esc_html_e( 'Product Screenshot Placeholder', 'leadoscope' ); ?>
			</div>
		</div>
	</section>

	<section class="section" id="features">
		<div class="container">
			<h2><?php esc_html_e( 'Why growing teams choose Leadoscope', 'leadoscope' ); ?></h2>
			<p class="section-subtitle">
				<?php esc_html_e( 'Built for small and mid-sized service businesses that need order, speed, and visibility without the weight of enterprise CRM systems.', 'leadoscope' ); ?>
			</p>
			<div class="features-grid">
				<article class="card">
					<h3><?php esc_html_e( 'Unified lead inbox', 'leadoscope' ); ?></h3>
					<p><?php esc_html_e( 'Website requests from all forms land in one place instead of getting lost in email chains, messengers, or spreadsheets.', 'leadoscope' ); ?></p>
				</article>
				<article class="card">
					<h3><?php esc_html_e( 'Simple status workflow', 'leadoscope' ); ?></h3>
					<p><?php esc_html_e( 'Mark each lead as new, in progress, won, or lost so the team always understands what still needs action.', 'leadoscope' ); ?></p>
				</article>
				<article class="card">
					<h3><?php esc_html_e( 'Clear team accountability', 'leadoscope' ); ?></h3>
					<p><?php esc_html_e( 'See response quality, conversion, and manager performance without setting up a heavy enterprise process.', 'leadoscope' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="section" id="pricing">
		<div class="container">
			<h2><?php esc_html_e( 'Pricing that grows with your client base', 'leadoscope' ); ?></h2>
			<p class="section-subtitle">
				<?php esc_html_e( 'Three plans with clear limits on seats and monthly leads, so smaller teams can start lean and expand when volume increases.', 'leadoscope' ); ?>
			</p>
			<div class="pricing-grid">
				<article class="price-card">
					<h3 class="tier"><?php esc_html_e( 'Basic', 'leadoscope' ); ?></h3>
					<p class="price">$19 <small>/ month</small></p>
					<ul class="price-list">
						<li><?php esc_html_e( 'Up to 3 employees', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'Up to 100 leads per month', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'Core statuses and notes', 'leadoscope' ); ?></li>
					</ul>
					<a href="#" class="btn btn-outline"><?php esc_html_e( 'Get Started', 'leadoscope' ); ?></a>
				</article>

				<article class="price-card pro">
					<span class="badge"><?php esc_html_e( 'Most Popular', 'leadoscope' ); ?></span>
					<h3 class="tier"><?php esc_html_e( 'Pro', 'leadoscope' ); ?></h3>
					<p class="price">$49 <small>/ month</small></p>
					<ul class="price-list">
						<li><?php esc_html_e( 'Up to 10 employees', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'Up to 1,000 leads per month', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'Analytics and source tracking', 'leadoscope' ); ?></li>
					</ul>
					<a href="#" class="btn btn-primary"><?php esc_html_e( 'Choose Pro', 'leadoscope' ); ?></a>
				</article>

				<article class="price-card">
					<h3 class="tier"><?php esc_html_e( 'Business', 'leadoscope' ); ?></h3>
					<p class="price">$99 <small>/ month</small></p>
					<ul class="price-list">
						<li><?php esc_html_e( 'Up to 50 employees', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'High monthly lead volumes', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'Priority support and advanced integrations', 'leadoscope' ); ?></li>
					</ul>
					<a href="#" class="btn btn-outline"><?php esc_html_e( 'Contact Sales', 'leadoscope' ); ?></a>
				</article>
			</div>
		</div>
	</section>

	<section class="section" id="faq">
		<div class="container">
			<h2><?php esc_html_e( 'Frequently asked questions', 'leadoscope' ); ?></h2>
			<p class="section-subtitle">
				<?php esc_html_e( 'The main thing we optimize for is simple setup: change the form action on the client site and start receiving structured leads immediately.', 'leadoscope' ); ?>
			</p>
			<div class="faq">
				<details>
					<summary><?php esc_html_e( 'How hard is the website integration?', 'leadoscope' ); ?></summary>
					<p><?php esc_html_e( 'In the ideal flow, the client or their developer only changes the form action URL to the Leadoscope endpoint with their API key.', 'leadoscope' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Can I switch plans later?', 'leadoscope' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Seat and lead limits can be upgraded as your team grows and your website generates more demand.', 'leadoscope' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Will I be able to see manager performance?', 'leadoscope' ); ?></summary>
					<p><?php esc_html_e( 'That is part of the core product direction: processed vs unprocessed leads, outcomes, and per-manager quality indicators.', 'leadoscope' ); ?></p>
				</details>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
