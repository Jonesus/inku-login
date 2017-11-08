<div class="account-container">
  <?php $user = wp_get_current_user(); ?>

  <div class="form-row">
    <?php _e( 'Name: ' . $user->first_name . ' ' . $user->last_name, 'inku-login' ) ?>
  </div>
  
  <div class="form-row">
    <?php _e( 'Username: ' . $user->get('username'), 'inku-login' ) ?>
  </div>
  
  <div class="form-row">
    <?php _e( 'E-mail: ' . $user->get('user_email'), 'inku-login' ) ?>
  </div>

  <div class="form-row">
    <?php _e( 'City of residence: ' . $user->get('city'), 'inku-login' ) ?>
  </div>
  
  <div class="form-row">
    <?php _e( 'Freshman year: ' . $user->get('freshman_year'), 'inku-login' ) ?>
  </div>
  
  <div class="form-row">
    <?php _e( 'Guild membership status: ' . $user->get('membership_type'), 'inku-login' ) ?>
  </div>
  
  <div class="form-row">
    <?php if ($user->get('ayy_member') == "true") {
            $status = "Active";
          } else {
            $status = "Not a member";
          }
          _e( 'AYY membership status: ' . $status, 'inku-login' )
    ?>
  </div>
</div>