<?php
/**
 * FAQ page template.
 *
 * @package WebulaStarter
 */

get_header();
?>
<main class="main">
	<div class="container">
		<section class="hero">
			<h1><?php esc_html_e( 'Frequently asked questions', 'leadoscope' ); ?></h1>
			<p><?php esc_html_e( 'Answers about setup, tariffs, and the way Leadoscope receives leads from client websites.', 'leadoscope' ); ?></p>
		</section>

		<section class="faq" aria-label="<?php esc_attr_e( 'Frequently asked questions list', 'leadoscope' ); ?>">
			<article class="faq__item">
				<button class="faq__question" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'How does the integration work?', 'leadoscope' ); ?></span>
					<span class="faq__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq__answer">
					<p><?php esc_html_e( 'In the main scenario, the client or their developer changes the form action on the website to the Leadoscope endpoint with the client API key.', 'leadoscope' ); ?></p>
				</div>
			</article>

			<article class="faq__item">
				<button class="faq__question" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'What is limited on the Basic tariff?', 'leadoscope' ); ?></span>
					<span class="faq__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq__answer">
					<p><?php esc_html_e( 'Basic is designed for a small team: fewer employee seats, a monthly lead cap, and only the core workspace features needed to avoid losing incoming requests.', 'leadoscope' ); ?></p>
				</div>
			</article>

			<article class="faq__item">
				<button class="faq__question" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'Can I change plans later?', 'leadoscope' ); ?></span>
					<span class="faq__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq__answer">
					<p><?php esc_html_e( 'Yes. As your team or lead volume grows, you can move from Basic to Pro or Business and unlock higher limits.', 'leadoscope' ); ?></p>
				</div>
			</article>

			<article class="faq__item">
				<button class="faq__question" type="button" aria-expanded="false">
					<span><?php esc_html_e( 'Can several managers work inside one account?', 'leadoscope' ); ?></span>
					<span class="faq__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq__answer">
					<p><?php esc_html_e( 'Yes. That is one of the tariff dimensions: each plan can limit how many employees have access to the workspace.', 'leadoscope' ); ?></p>
				</div>
			</article>
		</section>

		<section class="contact-card" aria-label="<?php esc_attr_e( 'Contact form', 'leadoscope' ); ?>">
			<h2><?php esc_html_e( 'Still have questions?', 'leadoscope' ); ?></h2>
			<p><?php esc_html_e( 'Send them here.', 'leadoscope' ); ?></p>

			<form id="questionForm" class="form">
				<div class="form__group">
					<label for="name"><?php esc_html_e( 'Name', 'leadoscope' ); ?></label>
					<input id="name" name="name" type="text" placeholder="<?php esc_attr_e( 'Enter your name', 'leadoscope' ); ?>" required />
				</div>

				<div class="form__group">
					<label for="email"><?php esc_html_e( 'Email', 'leadoscope' ); ?></label>
					<input id="email" name="email" type="email" placeholder="<?php esc_attr_e( 'Enter your email', 'leadoscope' ); ?>" required />
				</div>

				<div class="form__group">
					<label for="question"><?php esc_html_e( 'Your question', 'leadoscope' ); ?></label>
					<textarea id="question" name="question" placeholder="<?php esc_attr_e( 'Describe your question', 'leadoscope' ); ?>" required></textarea>
				</div>

				<button type="submit"><?php esc_html_e( 'Send question', 'leadoscope' ); ?></button>
				<div id="formSuccess" class="form__success" role="status" aria-live="polite">
					<?php esc_html_e( 'Thanks! We received your question.', 'leadoscope' ); ?>
				</div>
			</form>
		</section>
	</div>
</main>
<?php
get_footer();
