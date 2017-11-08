<div id="register-form">
  <?php if ( $attributes['show_title'] ) : ?>
    <h3><?php _e( 'Register', 'inku-login' ); ?></h3>
  <?php endif; ?>

  <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
    <?php foreach ( $attributes['errors'] as $error ) : ?>
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <form id="signupform" class="form-horizontal" action="<?php echo wp_registration_url(); ?>" method="post">
    <div class="form-row">
      <label for="first_name"><?php _e( 'First name', 'inku-login' ); ?></label>
      <input type="text" name="first_name" id="first-name">
    </div>

    <div class="form-row">
      <label for="last_name"><?php _e( 'Last name', 'inku-login' ); ?></label>
      <input type="text" name="last_name" id="last-name">
    </div>
    
    <div class="form-row">
      <label for="city"><?php _e( 'City of residence', 'inku-login' ); ?></label>
      <input type="text" name="city" id="city">
    </div>
    
    <div class="form-row">
      <label for="email"><?php _e( 'Email', 'inku-login' ); ?></label>
      <input type="text" name="email" id="email">
    </div>

    <div class="form-row">
      <label for="username"><?php _e( 'Username', 'inku-login' ); ?></label>
      <input type="text" name="username" id="username">
    </div>

    <div class="form-row">&nbsp;</div>

    <div class="form-row">
      <label for="year_started"><?php _e( 'Freshman year', 'inku-login' ); ?></label>
      <select type="text" name="year_started" id="year-started">
        <?php foreach ( range(intval(date("Y")), 1999) as $year ) : ?>
          <option><?php echo $year ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-row">
      <label for="membership-type"><?php _e( 'Inkubio membership type', 'inku-login' ); ?></label>
      <label class="radio"><input type="radio" name="membership_type" id="membership-type" value="actual_member" checked><?php _e( 'Actual member', 'inku-login' ); ?></label>
      <label class="radio"><input type="radio" name="membership_type" id="membership-type" value="outside_member"><?php _e( 'Outside member', 'inku-login' ); ?></label>
      <label class="radio"><input type="radio" name="membership_type" id="membership-type" value="supporting_member"><?php _e( 'Supporting member', 'inku-login' ); ?></label>
    </div>

    <div class="form-row">
      <label><input type="checkbox" name="ayy_membership_status"><?php _e( 'I am a member of Aalto University Student union', 'inku-login' ); ?></label>
    </div>

    <div class="form-row">&nbsp;</div>

    <div class="form-row">
      <?php _e( 'Note: Your password will be generated automatically and emailed to the address you specify above.', 'inku-login' ); ?>
    </div>

    <?php if ( $attributes['recaptcha_site_key'] ) : ?>
      <div class="form-row recaptcha-container">
        <div class="g-recaptcha" data-sitekey="<?php echo $attributes['recaptcha_site_key']; ?>"></div>
      </div>
    <?php endif; ?>

    <div class="form-row signup-submit">
      <input type="submit" name="submit" class="register-button"
             value="<?php _e( 'Register', 'inku-login' ); ?>"/>
    </div>
  </form>
</div>