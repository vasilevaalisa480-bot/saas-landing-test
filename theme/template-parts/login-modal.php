<div
	class="login-modal"
	id="login-modal"
	role="dialog"
	aria-modal="true"
	aria-hidden="true"
	aria-labelledby="login-modal-title"
>
	<div class="login-modal__backdrop" data-login-modal-close tabindex="-1"></div>
	<div class="login-modal__card">
		<header class="login-modal__header">
			<h2 class="login-modal__title" id="login-modal-title"><?php esc_html_e( 'Sign in to your account', 'leadoscope' ); ?></h2>
			<button
				type="button"
				class="login-modal__close"
				data-login-modal-close
				aria-label="<?php esc_attr_e( 'Close sign in form', 'leadoscope' ); ?>"
			>
				&times;
			</button>
		</header>

		<div class="login-modal__body">
			<form class="login-form" id="login-form" novalidate>
				<div class="login-form__field">
					<label class="login-form__label" for="login-email"><?php esc_html_e( 'Work email', 'leadoscope' ); ?></label>
					<input
						class="login-form__input"
						type="email"
						id="login-email"
						name="email"
						placeholder="you@company.example"
						autocomplete="email"
						required
					/>
				</div>

				<div class="login-form__field">
					<label class="login-form__label" for="login-password"><?php esc_html_e( 'Password', 'leadoscope' ); ?></label>
					<input
						class="login-form__input"
						type="password"
						id="login-password"
						name="password"
						placeholder="<?php esc_attr_e( 'Your password', 'leadoscope' ); ?>"
						autocomplete="current-password"
						required
					/>
				</div>

				<div class="login-form__row">
					<label class="login-form__checkbox">
						<input type="checkbox" name="remember" />
						<span><?php esc_html_e( 'Keep me signed in', 'leadoscope' ); ?></span>
					</label>
					<a href="#" class="login-form__link"><?php esc_html_e( 'Forgot password?', 'leadoscope' ); ?></a>
				</div>

				<button type="submit" class="btn btn-primary login-form__submit"><?php esc_html_e( 'Sign in', 'leadoscope' ); ?></button>

				<p class="login-form__hint">
					<?php esc_html_e( 'No account yet?', 'leadoscope' ); ?>
					<a href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>"><?php esc_html_e( 'Request access to Leadoscope.', 'leadoscope' ); ?></a>
				</p>
			</form>
		</div>
	</div>
</div>
