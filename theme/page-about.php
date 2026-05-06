<?php
/**
 * About page template.
 *
 * @package WebulaStarter
 */

get_header();
?>
<main>
	<section class="about-hero" aria-labelledby="about-hero-title">
		<div class="container hero-grid">
			<div>
				<h1 id="about-hero-title"><?php esc_html_e( 'About the project', 'leadoscope' ); ?></h1>
				<p class="lead">
					<?php esc_html_e( 'Leadoscope is a compact CRM for service companies that have already outgrown spreadsheets, inbox chaos, and unmanaged website requests.', 'leadoscope' ); ?>
				</p>
				<div class="about-hero-actions">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Start free trial', 'leadoscope' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>" class="btn btn-outline"><?php esc_html_e( 'View pricing', 'leadoscope' ); ?></a>
				</div>
			</div>
			<div>
				<div class="hero-shot about-hero-shot" role="img" aria-label="<?php esc_attr_e( 'Product overview placeholder', 'leadoscope' ); ?>">
					<?php esc_html_e( 'Product overview placeholder', 'leadoscope' ); ?>
				</div>
				<p class="about-hero-caption"><?php esc_html_e( 'Replace with illustration or screenshot in WordPress.', 'leadoscope' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="why-heading">
		<div class="container">
			<h2 id="why-heading"><?php esc_html_e( 'Why we built the service', 'leadoscope' ); ?></h2>
			<div class="about-prose">
				<p><?php esc_html_e( 'Many small businesses receive leads through several forms, messengers, and campaign pages, but no one can say for sure which requests were answered and which were quietly lost.', 'leadoscope' ); ?></p>
				<p><?php esc_html_e( 'Heavy CRMs often create the opposite problem: too many screens, too much setup, and a process that is harder than the original chaos.', 'leadoscope' ); ?></p>
				<p><?php esc_html_e( 'Leadoscope focuses on one core outcome: every website lead gets captured, processed, and measured inside one calm workspace.', 'leadoscope' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="audience-heading">
		<div class="container">
			<h2 id="audience-heading"><?php esc_html_e( 'Who this product is for', 'leadoscope' ); ?></h2>
			<p class="section-subtitle"><?php esc_html_e( 'Especially useful for growing service businesses where sales discipline matters, but enterprise software is still too heavy.', 'leadoscope' ); ?></p>
			<ul class="audience-list">
				<li><strong><?php esc_html_e( 'Legal firms', 'leadoscope' ); ?></strong> <?php esc_html_e( '— track consultations, callbacks, and case-intake outcomes in one lead flow.', 'leadoscope' ); ?></li>
				<li><strong><?php esc_html_e( 'Medical and wellness services', 'leadoscope' ); ?></strong> <?php esc_html_e( '— keep incoming requests visible without losing them between reception and specialists.', 'leadoscope' ); ?></li>
				<li><strong><?php esc_html_e( 'Design, renovation, and agencies', 'leadoscope' ); ?></strong> <?php esc_html_e( '— collect inquiries from landing pages and keep the commercial pipeline tidy from day one.', 'leadoscope' ); ?></li>
				<li><strong><?php esc_html_e( 'Owners and team leads', 'leadoscope' ); ?></strong> <?php esc_html_e( '— understand who responds well, where demand comes from, and what actually converts.', 'leadoscope' ); ?></li>
			</ul>
		</div>
	</section>
</main>
<?php
get_footer();
