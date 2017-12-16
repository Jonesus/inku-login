<?php
/* Get user info. */
$user = wp_get_current_user();

$error = array();
/* If profile was saved, update profile. */
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] )) {

    /* Update user information. */
    if ( !empty( $_POST['email'] ) ){
        if (!is_email(esc_attr( $_POST['email'] )))
            $error[] = __('The Email you entered is not valid.  please try again.', 'inku-login');
        elseif(email_exists(esc_attr( $_POST['email'] )) != $user->id )
            $error[] = __('This email is already used by another user.', 'inku-login');
        else{
            wp_update_user( array ('ID' => $user->ID, 'user_email' => esc_attr( $_POST['email'] )));
        }
    }

    if ( !empty( $_POST['firstname'] ) )
        wp_update_user( array ('ID' => $user->ID, 'first_name' => esc_attr( $_POST['firstname']) ) );
    if ( !empty( $_POST['lastname'] ) )
        wp_update_user( array ('ID' => $user->ID, 'last_name' => esc_attr( $_POST['lastname']) ) );
    if ( !empty( $_POST['homecity'] ) )
        update_user_meta( $user->ID, 'city', esc_attr( $_POST['homecity'] ) );

    /* Redirect so the page will show updated info.*/
    if ( count($error) == 0 ) {
        do_action('edit_user_profile_update', $user->ID);
    }
}
?>

<div class="account-container">

  <?php if ( count( $error ) > 0 ) : ?>
    <?php foreach ( $error as $e ) : ?>
      <div class="alert alert-danger">
        <?php echo $e; ?>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php $user = wp_get_current_user(); ?>
  <form class="form-horizontal" action="<?php the_permalink(); ?>" method="post">
    <div class="form-row">
      <label for="username"><?php _e( 'Username', 'inku-login' ); ?></label>
      <input type="text" name="username" id="username" value="<?php echo $user->get('username') ?>" readonly>
    </div>
    
    <div class="form-row">
      <label for="first_name"><?php _e( 'First name', 'inku-login' ); ?></label>
      <input type="text" name="firstname" id="first-name" value="<?php echo $user->get('first_name') ?>">
    </div>

    <div class="form-row">
      <label for="last_name"><?php _e( 'Last name', 'inku-login' ); ?></label>
      <input type="text" name="lastname" id="last-name" value="<?php echo $user->get('last_name') ?>">
    </div>

    <div class="form-row">
      <label for="email"><?php _e( 'Email', 'inku-login' ); ?></label>
      <input type="text" name="email" id="email" value="<?php echo $user->get('user_email') ?>">
    </div>

    <div class="form-row">
      <label for="city"><?php _e( 'City of residence', 'inku-login' ); ?></label>
      <input type="text" name="homecity" id="city" value="<?php echo $user->get('city') ?>">
    </div>
    
    <div class="form-row">
      <label for="year_started"><?php _e( 'Freshman year', 'inku-login' ); ?></label>
      <select type="text" name="year_started" id="year-started" readonly>
        <option><?php echo $user->get('freshman_year') ?></option>
      </select>
    </div>
    
    <div class="form-row">
      <?php _e( 'Guild membership status:', 'inku-login' ); ?> <br/>
      <?php echo $user->get('membership_type'); ?>
    </div>
    
    <div class="form-row">
      <?php if ($user->get('ayy_member') == "true") {
              $status = "Active";
            } else {
              $status = "Not a member";
            }
            _e( 'AYY membership status:', 'inku-login' );
      ?> <br/>
      <?php echo $status; ?>
    </div>

    <?php 
      do_action('edit_user_profile',$current_user); 
    ?>

    <div class="form-row">
      <input name="action" type="submit" id="updateuser" class="submit button" value="<?php _e('Update', 'profile'); ?>" />
    </div>
  </form>
</div>