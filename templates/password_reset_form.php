<div id="password-reset-form" class="widecolumn">
	<?php if ( $attributes['show_title'] ) : ?>
		<h3><?php _e( 'Pick a New Password', 'inku-login' ); ?></h3>
	<?php endif; ?>

	<form name="resetpassform" id="resetpassform" action="<?php echo site_url( 'wp-login.php?action=resetpass' ); ?>" method="post" autocomplete="off">
		<input type="hidden" id="user_login" name="rp_login" value="<?php echo esc_attr( $attributes['login'] ); ?>" autocomplete="off" />
		<input type="hidden" name="rp_key" value="<?php echo esc_attr( $attributes['key'] ); ?>" />

		<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
			<?php foreach ( $attributes['errors'] as $error ) : ?>
      	<div class="alert alert-danger">
					<?php echo $error; ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>

		<div class="form-row">
			<label for="pass1"><?php _e( 'New password', 'inku-login' ) ?></label>
			<input type="password" name="pass1" id="pass1" class="input" size="20" value="" autocomplete="off" />
    </div>
		<div class="form-row">
			<label for="pass2"><?php _e( 'Repeat new password', 'inku-login' ) ?></label>
			<input type="password" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="off" />
    </div>
		<div class="form-row description">
			<?php echo wp_get_password_hint(); ?>
	  </div>
		<div class="form-row resetpass-submit">
			<input type="submit" name="submit" id="resetpass-button"
			       class="button" value="<?php _e( 'Reset Password', 'inku-login' ); ?>" />
    </div>
	</form>
</div>