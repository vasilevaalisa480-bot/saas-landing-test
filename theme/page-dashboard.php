<?php
/**
 * Dashboard page template.
 *
 * @package WebulaStarter
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="<?php esc_attr_e( 'Leadoscope dashboard prototype for website leads, requests, and analytics.', 'leadoscope' ); ?>" />
	<title><?php echo esc_html( wp_get_document_title() ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'page-dashboard dashboard-page' ); ?>>
<?php wp_body_open(); ?>
<header class="app-header">
	<div class="app-header-inner">
		<div class="app-header-brand">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="<?php esc_attr_e( 'Leadoscope — home', 'leadoscope' ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" decoding="async" />
			</a>
			<p class="app-header-tagline"><?php esc_html_e( 'Lead CRM — user dashboard', 'leadoscope' ); ?></p>
		</div>
		<div class="app-header-user">
			<span><?php esc_html_e( 'Anna Kovacs, Administrator', 'leadoscope' ); ?></span>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline btn-sm"><?php esc_html_e( 'Log out', 'leadoscope' ); ?></a>
		</div>
	</div>
</header>

<main class="dashboard-layout">
	<aside class="sidebar" aria-label="<?php esc_attr_e( 'Dashboard sections', 'leadoscope' ); ?>">
		<nav class="sidebar-nav" role="tablist">
			<button type="button" class="sidebar-item sidebar-item--active" role="tab" aria-selected="true" data-tab-target="tab-profile" id="tab-btn-profile"><?php esc_html_e( 'Profile', 'leadoscope' ); ?></button>
			<button type="button" class="sidebar-item" role="tab" aria-selected="false" data-tab-target="tab-dashboard" id="tab-btn-dashboard"><?php esc_html_e( 'Dashboard', 'leadoscope' ); ?></button>
			<button type="button" class="sidebar-item" role="tab" aria-selected="false" data-tab-target="tab-requests" id="tab-btn-requests"><?php esc_html_e( 'Requests', 'leadoscope' ); ?></button>
			<button type="button" class="sidebar-item" role="tab" aria-selected="false" data-tab-target="tab-analytics" id="tab-btn-analytics"><?php esc_html_e( 'Analytics', 'leadoscope' ); ?></button>
			<button type="button" class="sidebar-item" role="tab" aria-selected="false" data-tab-target="tab-settings" id="tab-btn-settings"><?php esc_html_e( 'Settings & Integration', 'leadoscope' ); ?></button>
		</nav>
	</aside>

	<div class="dashboard-main">
		<section id="tab-profile" class="tab-content tab-content--active" role="tabpanel" aria-labelledby="tab-btn-profile">
			<h1 class="dashboard-panel-title"><?php esc_html_e( 'Profile & billing', 'leadoscope' ); ?></h1>
			<p class="dashboard-panel-lead"><?php esc_html_e( 'Company profile, legal details, and your current subscription limits.', 'leadoscope' ); ?></p>

			<div class="profile-block">
				<h3><?php esc_html_e( 'Company & responsible person', 'leadoscope' ); ?></h3>
				<p><strong><?php esc_html_e( 'Northwind Legal Group', 'leadoscope' ); ?></strong> <?php esc_html_e( '— inbound consultations from website landing pages and referral forms.', 'leadoscope' ); ?></p>
				<p><?php esc_html_e( 'Account owner:', 'leadoscope' ); ?> <strong><?php esc_html_e( 'Elena Morozova', 'leadoscope' ); ?></strong> (elena@northwind.example).</p>
			</div>

			<div class="profile-block">
				<h3><?php esc_html_e( 'Current plan', 'leadoscope' ); ?></h3>
				<div class="tariff-card tariff-card--business">
					<p class="tariff-name"><?php esc_html_e( 'Business', 'leadoscope' ); ?></p>
					<p class="tariff-meta"><?php esc_html_e( 'Paid through March 15, 2026. 42 days remaining in this billing cycle.', 'leadoscope' ); ?></p>
					<ul class="tariff-list">
						<li><?php esc_html_e( 'Up to 50 staff seats with role-based access', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'High monthly lead volume with advanced filters', 'leadoscope' ); ?></li>
						<li><?php esc_html_e( 'Extended analytics, exports, and API integrations', 'leadoscope' ); ?></li>
					</ul>
					<p class="tariff-meta"><?php esc_html_e( 'Included requests this month:', 'leadoscope' ); ?> <strong>3,240 / ∞</strong> <?php esc_html_e( 'used.', 'leadoscope' ); ?></p>
				</div>
			</div>
		</section>

		<section id="tab-dashboard" class="tab-content" role="tabpanel" aria-labelledby="tab-btn-dashboard" hidden>
			<h1 class="dashboard-panel-title"><?php esc_html_e( 'Overview', 'leadoscope' ); ?></h1>
			<p class="dashboard-panel-lead"><?php esc_html_e( 'Snapshot of inbound requests and pipeline health for the current month.', 'leadoscope' ); ?></p>

			<div class="metrics-row">
				<article class="metric-card">
					<p class="metric-value">184</p>
					<p class="metric-label"><?php esc_html_e( 'Total requests', 'leadoscope' ); ?></p>
					<p class="metric-hint"><?php esc_html_e( 'All channels for the current month.', 'leadoscope' ); ?></p>
				</article>
				<article class="metric-card">
					<p class="metric-value">42</p>
					<p class="metric-label"><?php esc_html_e( 'In progress', 'leadoscope' ); ?></p>
					<p class="metric-hint"><?php esc_html_e( 'Awaiting reply or qualification.', 'leadoscope' ); ?></p>
				</article>
				<article class="metric-card">
					<p class="metric-value">128</p>
					<p class="metric-label"><?php esc_html_e( 'Closed', 'leadoscope' ); ?></p>
					<p class="metric-hint"><?php esc_html_e( 'Won or lost requests with a final outcome.', 'leadoscope' ); ?></p>
				</article>
				<article class="metric-card">
					<p class="metric-value">14</p>
					<p class="metric-label"><?php esc_html_e( 'Overdue follow-up', 'leadoscope' ); ?></p>
					<p class="metric-hint"><?php esc_html_e( 'New this week: 31 requests.', 'leadoscope' ); ?></p>
				</article>
			</div>
		</section>

		<section id="tab-requests" class="tab-content" role="tabpanel" aria-labelledby="tab-btn-requests" hidden>
			<h1 class="dashboard-panel-title"><?php esc_html_e( 'Requests', 'leadoscope' ); ?></h1>
			<p class="dashboard-panel-lead"><?php esc_html_e( 'Incoming leads from website forms, ads, and referral pages.', 'leadoscope' ); ?></p>

			<div class="requests-toolbar plan-business-only">
				<button type="button" class="btn btn-primary" id="open-request-modal"><?php esc_html_e( 'New request', 'leadoscope' ); ?></button>

				<div class="field">
					<label for="filter-status"><?php esc_html_e( 'Status', 'leadoscope' ); ?></label>
					<select id="filter-status" name="status">
						<option value="all"><?php esc_html_e( 'All', 'leadoscope' ); ?></option>
						<option value="new"><?php esc_html_e( 'New', 'leadoscope' ); ?></option>
						<option value="in_progress"><?php esc_html_e( 'In progress', 'leadoscope' ); ?></option>
						<option value="done"><?php esc_html_e( 'Closed', 'leadoscope' ); ?></option>
					</select>
				</div>

				<div class="field">
					<label for="filter-doctor"><?php esc_html_e( 'Manager', 'leadoscope' ); ?></label>
					<select id="filter-doctor" name="doctor">
						<option value="all"><?php esc_html_e( 'All', 'leadoscope' ); ?></option>
						<option value="smith"><?php esc_html_e( 'Anna Kovacs', 'leadoscope' ); ?></option>
						<option value="patel"><?php esc_html_e( 'Mark Patel', 'leadoscope' ); ?></option>
						<option value="nguyen"><?php esc_html_e( 'Vera Nguyen', 'leadoscope' ); ?></option>
					</select>
				</div>

				<div class="field">
					<label for="filter-period"><?php esc_html_e( 'Period', 'leadoscope' ); ?></label>
					<select id="filter-period" name="period">
						<option value="all"><?php esc_html_e( 'All time', 'leadoscope' ); ?></option>
						<option value="7d"><?php esc_html_e( 'Last 7 days', 'leadoscope' ); ?></option>
						<option value="30d"><?php esc_html_e( 'Last 30 days', 'leadoscope' ); ?></option>
					</select>
				</div>

				<div class="field requests-toolbar__search">
					<label for="search-requests"><?php esc_html_e( 'Search', 'leadoscope' ); ?></label>
					<input id="search-requests" type="search" name="q" placeholder="<?php esc_attr_e( 'Lead name or request ID', 'leadoscope' ); ?>" autocomplete="off" />
				</div>
			</div>

			<div class="requests-table-wrap">
				<table class="requests-table" id="requests-table">
					<thead>
						<tr>
							<th>ID</th>
							<th><?php esc_html_e( 'Lead name', 'leadoscope' ); ?></th>
							<th><?php esc_html_e( 'Source / request', 'leadoscope' ); ?></th>
							<th><?php esc_html_e( 'Status', 'leadoscope' ); ?></th>
							<th><?php esc_html_e( 'Created at', 'leadoscope' ); ?></th>
							<th><?php esc_html_e( 'Last update', 'leadoscope' ); ?></th>
							<th><?php esc_html_e( 'Actions', 'leadoscope' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr data-status="new" data-doctor="smith" data-created-at="2026-02-10T09:12">
							<td>#REQ-8841</td>
							<td><?php esc_html_e( 'James O’Connell', 'leadoscope' ); ?></td>
							<td><?php esc_html_e( 'Homepage form · Consultation', 'leadoscope' ); ?></td>
							<td><span class="status-pill status-new"><?php esc_html_e( 'New', 'leadoscope' ); ?></span></td>
							<td>Feb 10, 2026 09:12</td>
							<td>Feb 10, 2026 09:12</td>
							<td class="requests-table__actions"><button type="button" class="btn btn-outline btn-sm js-edit-request" data-request-id="8841" data-full-name="James O'Connell" data-request-date="2026-02-10" data-service="consultation" data-status="new" data-specialist="ivanov" data-description="Homepage form lead" data-comment="Asked for a callback after 5 PM." data-manager="sidorov"><?php esc_html_e( 'Edit', 'leadoscope' ); ?></button></td>
						</tr>
						<tr data-status="in_progress" data-doctor="patel" data-created-at="2026-02-09T14:40">
							<td>#REQ-8840</td>
							<td><?php esc_html_e( 'Maria Santos', 'leadoscope' ); ?></td>
							<td><?php esc_html_e( 'Pricing page · Website redesign', 'leadoscope' ); ?></td>
							<td><span class="status-pill status-progress"><?php esc_html_e( 'In progress', 'leadoscope' ); ?></span></td>
							<td>Feb 9, 2026 14:40</td>
							<td>Feb 10, 2026 08:05</td>
							<td class="requests-table__actions"><button type="button" class="btn btn-outline btn-sm js-edit-request" data-request-id="8840" data-full-name="Maria Santos" data-request-date="2026-02-09" data-service="consultation" data-status="in_progress" data-specialist="petrova" data-description="Requested pricing details" data-comment="" data-manager="kozlova"><?php esc_html_e( 'Edit', 'leadoscope' ); ?></button></td>
						</tr>
						<tr data-status="done" data-doctor="nguyen" data-created-at="2026-02-08T10:05">
							<td>#REQ-8838</td>
							<td><?php esc_html_e( 'Sophie Martin', 'leadoscope' ); ?></td>
							<td><?php esc_html_e( 'Landing page · Contract review', 'leadoscope' ); ?></td>
							<td><span class="status-pill status-closed"><?php esc_html_e( 'Closed', 'leadoscope' ); ?></span></td>
							<td>Feb 8, 2026 10:05</td>
							<td>Feb 9, 2026 09:30</td>
							<td class="requests-table__actions"><button type="button" class="btn btn-outline btn-sm js-edit-request" data-request-id="8838" data-full-name="Sophie Martin" data-request-date="2026-02-08" data-service="consultation" data-status="done" data-specialist="ivanov" data-description="Qualified corporate lead" data-comment="Won after commercial proposal." data-manager="sidorov"><?php esc_html_e( 'Edit', 'leadoscope' ); ?></button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<section id="tab-analytics" class="tab-content" role="tabpanel" aria-labelledby="tab-btn-analytics" hidden>
			<h1 class="dashboard-panel-title"><?php esc_html_e( 'Analytics', 'leadoscope' ); ?></h1>
			<p class="dashboard-panel-lead"><?php esc_html_e( 'Basic lead performance by period, channel, and team execution.', 'leadoscope' ); ?></p>
			<div class="analytics-stats">
				<div class="analytics-stat-block">
					<h4><?php esc_html_e( 'Requests in period', 'leadoscope' ); ?></h4>
					<p class="stat-value">612</p>
					<p class="tariff-meta"><?php esc_html_e( 'Website 54% · Landing pages 28% · Referrals 18%', 'leadoscope' ); ?></p>
				</div>
				<div class="analytics-stat-block">
					<h4><?php esc_html_e( 'Lead-to-win conversion', 'leadoscope' ); ?></h4>
					<p class="stat-value">31%</p>
					<p class="tariff-meta"><?php esc_html_e( 'Won requests divided by all leads in the selected period.', 'leadoscope' ); ?></p>
				</div>
			</div>
		</section>

		<section id="tab-settings" class="tab-content" role="tabpanel" aria-labelledby="tab-btn-settings" hidden>
			<h1 class="dashboard-panel-title"><?php esc_html_e( 'Settings & integration', 'leadoscope' ); ?></h1>
			<p class="dashboard-panel-lead"><?php esc_html_e( 'Connect client website forms with your API key and direct endpoint URL.', 'leadoscope' ); ?></p>

			<div class="settings-section">
				<h3><?php esc_html_e( 'API key', 'leadoscope' ); ?></h3>
				<p><?php esc_html_e( 'Keep this secret and rotate it if the key is exposed.', 'leadoscope' ); ?></p>
				<div class="api-key-row">
					<code id="api-key-sample">pk_test_xxxxxxxxxxxxxx</code>
					<button type="button" class="btn btn-outline btn-sm"><?php esc_html_e( 'Copy', 'leadoscope' ); ?></button>
				</div>
			</div>

			<div class="settings-section">
				<h3><?php esc_html_e( 'How to integrate a form on your website', 'leadoscope' ); ?></h3>
				<p><?php esc_html_e( 'The simplest setup is to point your existing HTML form to the Leadoscope endpoint and pass the client key.', 'leadoscope' ); ?></p>
				<div class="code-block">
<pre><code>&lt;form method="post" action="https://yourdomain.example/api/leads?key=API_KEY"&gt;
  &lt;input type="text" name="name" placeholder="Your name"&gt;
  &lt;input type="text" name="phone" placeholder="Phone"&gt;
  &lt;input type="email" name="email" placeholder="Email"&gt;
  &lt;textarea name="message" placeholder="Comment"&gt;&lt;/textarea&gt;
  &lt;input type="hidden" name="source_page" value="PAGE_OR_URL"&gt;
  &lt;button type="submit"&gt;Send&lt;/button&gt;
&lt;/form&gt;</code></pre>
				</div>
			</div>
		</section>
	</div>
</main>

<div class="request-modal" id="request-modal" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="request-modal-title-text">
	<div class="request-modal__backdrop" data-request-modal-close tabindex="-1"></div>
	<div class="request-modal__card">
		<header class="request-modal__header">
			<h2 class="request-modal__title" id="request-modal-title-text"><?php esc_html_e( 'Request', 'leadoscope' ); ?></h2>
			<div class="request-modal__header-right">
				<span class="request-modal__number" id="request-modal-number-display"><?php esc_html_e( 'Request #1243', 'leadoscope' ); ?></span>
				<button type="button" class="request-modal__close" data-request-modal-close aria-label="<?php esc_attr_e( 'Close', 'leadoscope' ); ?>">&times;</button>
			</div>
		</header>

		<div class="request-modal__body">
			<form class="request-form" id="request-form">
				<div class="request-form__field">
					<label class="request-form__label" for="request-id"><?php esc_html_e( 'Request number', 'leadoscope' ); ?></label>
					<input class="request-form__input" type="text" id="request-id" name="request_id" value="1243" readonly aria-readonly="true" />
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-fullname"><?php esc_html_e( 'Lead name', 'leadoscope' ); ?></label>
					<input class="request-form__input" type="text" id="request-fullname" name="full_name" placeholder="<?php esc_attr_e( 'John Doe', 'leadoscope' ); ?>" autocomplete="name" required />
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-date"><?php esc_html_e( 'Date', 'leadoscope' ); ?></label>
					<input class="request-form__input" type="date" id="request-date" name="request_date" required />
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-service"><?php esc_html_e( 'Request type', 'leadoscope' ); ?></label>
					<select class="request-form__select" id="request-service" name="service" required>
						<option value="" disabled selected><?php esc_html_e( 'Select type', 'leadoscope' ); ?></option>
						<option value="consultation"><?php esc_html_e( 'Consultation', 'leadoscope' ); ?></option>
						<option value="service_onboarding"><?php esc_html_e( 'Service onboarding', 'leadoscope' ); ?></option>
						<option value="tech_support"><?php esc_html_e( 'Support', 'leadoscope' ); ?></option>
					</select>
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-description"><?php esc_html_e( 'Description', 'leadoscope' ); ?></label>
					<textarea class="request-form__textarea" id="request-description" name="description" rows="4" placeholder="<?php esc_attr_e( 'Short summary of the request', 'leadoscope' ); ?>"></textarea>
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-status"><?php esc_html_e( 'Status', 'leadoscope' ); ?></label>
					<select class="request-form__select" id="request-status" name="status" required>
						<option value="new"><?php esc_html_e( 'New', 'leadoscope' ); ?></option>
						<option value="in_progress"><?php esc_html_e( 'In progress', 'leadoscope' ); ?></option>
						<option value="done"><?php esc_html_e( 'Closed', 'leadoscope' ); ?></option>
						<option value="cancelled"><?php esc_html_e( 'Cancelled', 'leadoscope' ); ?></option>
					</select>
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-specialist"><?php esc_html_e( 'Assignee', 'leadoscope' ); ?></label>
					<select class="request-form__select" id="request-specialist" name="specialist" required>
						<option value="" disabled selected><?php esc_html_e( 'Assign a specialist', 'leadoscope' ); ?></option>
						<option value="ivanov"><?php esc_html_e( 'Anna Kovacs', 'leadoscope' ); ?></option>
						<option value="petrova"><?php esc_html_e( 'Mark Patel', 'leadoscope' ); ?></option>
						<option value="nguyen"><?php esc_html_e( 'Vera Nguyen', 'leadoscope' ); ?></option>
					</select>
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-comment"><?php esc_html_e( 'Internal note', 'leadoscope' ); ?></label>
					<textarea class="request-form__textarea" id="request-comment" name="comment" rows="3" placeholder="<?php esc_attr_e( 'Internal comment for the team', 'leadoscope' ); ?>"></textarea>
				</div>
				<div class="request-form__field">
					<label class="request-form__label" for="request-manager"><?php esc_html_e( 'Manager', 'leadoscope' ); ?></label>
					<select class="request-form__select" id="request-manager" name="manager">
						<option value=""><?php esc_html_e( 'Not assigned', 'leadoscope' ); ?></option>
						<option value="sidorov"><?php esc_html_e( 'Anna Kovacs', 'leadoscope' ); ?></option>
						<option value="kozlova"><?php esc_html_e( 'Mark Patel', 'leadoscope' ); ?></option>
						<option value="volkov"><?php esc_html_e( 'Vera Nguyen', 'leadoscope' ); ?></option>
					</select>
				</div>
			</form>
		</div>

		<footer class="request-modal__footer">
			<button type="button" class="request-modal__button request-modal__button--secondary" id="request-modal-cancel" data-request-modal-close><?php esc_html_e( 'Cancel', 'leadoscope' ); ?></button>
			<button type="button" class="request-modal__button request-modal__button--primary" id="request-modal-save"><?php esc_html_e( 'Save', 'leadoscope' ); ?></button>
		</footer>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
