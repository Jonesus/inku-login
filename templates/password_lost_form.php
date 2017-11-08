<div id="password-lost-form" class="widecolumn">
	<?php if ( $attributes['show_title'] ) : ?>
		<h3><?php _e( 'Forgot Your Password?', 'inku-login' ); ?></h3>
	<?php endif; ?>

	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
		<?php foreach ( $attributes['errors'] as $error ) : ?>
      <div class="alert alert-danger">
				<?php echo $error; ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

	<p>
		<?php
			_e(
				"Enter your email address and we'll send you a link you can use to pick a new password.",
				'inku_login'
			);
		?>
	</p>

	<form id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
		<div class="form-row">
			<label for="user_login"><?php _e( 'Email', 'inku-login' ); ?></label>
			<input type="text" name="user_login" id="user_login">
		</div>

		<div class="form-row lostpassword-submit">
			<input type="submit" name="submit" class="lostpassword-button"
			       value="<?php _e( 'Reset Password', 'inku-login' ); ?>"/>
		</div>
	</form>
</div>