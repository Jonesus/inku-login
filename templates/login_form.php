<?php if ( true ) : ?>
<div class="login-form-container">
	<?php if ( $attributes['show_title'] ) : ?>
		<h2><?php _e( 'Sign In', 'inku-login' ); ?></h2>
	<?php endif; ?>

	<!-- Show errors if there are any -->
	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
		<?php foreach ( $attributes['errors'] as $error ) : ?>
      <div class="alert alert-danger">
				<?php echo $error; ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

	<!-- Show logged out message if user just logged out -->
	<?php if ( $attributes['logged_out'] ) : ?>
		<div class="alert alert-success">
			<?php _e( 'You have signed out. Would you like to sign in again?', 'inku-login' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( $attributes['registered'] ) : ?>
		<div class="alert alert-success">
			<?php
				printf(
					__( 'You have successfully registered to <strong>%s</strong>. We have emailed your password to the email address you entered.', 'inku-login' ),
					get_bloginfo( 'name' )
				);
			?>
		</div>
	<?php endif; ?>

	<?php if ( $attributes['lost_password_sent'] ) : ?>
		<p class="login-info">
			<?php _e( 'Check your email for a link to reset your password.', 'inku-login' ); ?>
		</p>
	<?php endif; ?>

	<?php if ( $attributes['password_updated'] ) : ?>
		<p class="login-info">
			<?php _e( 'Your password has been changed. You can sign in now.', 'inku-login' ); ?>
		</p>
	<?php endif; ?>
	

	<!--
	<?php
		wp_login_form(
			array(
				'label_username' => __( 'Email', 'inku-login' ),
				'label_log_in' => __( 'Sign In', 'inku-login' ),
				'redirect' => $attributes['redirect'],
			)
		);
	?>
	-->


	<div class="login-form-container">
		<form method="post" action="<?php echo wp_login_url(); ?>">
			<div class="form-row login-username">
				<label for="user_login"><?php _e( 'Email', 'inku-login' ); ?></label>
				<input type="text" name="log" id="user_login">
			</div>
			<div class="form-row login-password">
				<label for="user_pass"><?php _e( 'Password', 'inku-login' ); ?></label>
				<input type="password" name="pwd" id="user_pass">
			</div>
			<div class="form-row login-submit">
				<input type="submit" value="<?php _e( 'Sign In', 'inku-login' ); ?>">
			</div>
		</form>
	</div>


	<a class="forgot-password" href="<?php echo wp_lostpassword_url(); ?>">
		<?php _e( 'Forgot your password?', 'inku-login' ); ?>
	</a>

</div>
<?php else : ?>
	
<?php endif; ?>
