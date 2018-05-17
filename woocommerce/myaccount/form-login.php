<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="panel panel-default user-login">
	<div class="panel-heading">
		<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>
	</div>
	<div class="panel-body">
		<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
			<p>No account?  <a href="#" class="switch-user-form">Sign up for free!</a></p>
		<?php endif; ?>
		<form method="post" class="form-group">
			<?php do_action( 'woocommerce_login_form_start' ); ?>
			<label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
			<div class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide input-group">
				<span class="input-group-addon color1-background-color color1-border-color"><i class="fa fa-user color-1-text-contrast" aria-hidden="true"></i></span>
				<input type="text" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
			</div>
			<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
			<div class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide input-group">
				<span class="input-group-addon color1-background-color color1-border-color"><i class="fa fa-unlock-alt color-1-text-contrast" aria-hidden="true"></i></span>
				<input class="form-control woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"/>
			</div>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="woocommerce-Button btn button-primary" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>"><?php esc_html_e( 'Login', 'woocommerce' ); ?></button>
				<input class="woocommerce-Input woocommerce-Input--checkbox with-font" name="rememberme" type="checkbox" id="rememberme" value="forever" />
				<label for="rememberme" class="inline"><?php _e( 'Remember me', 'woocommerce' ); ?></label>

			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>
			<?php do_action( 'woocommerce_login_form_end' ); ?>
		</form>
	</div> <!-- End of Panel Body -->
</div>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="panel panel-default user-registration">
	<div class="panel-heading">
		<h2><?php _e( 'Register', 'woocommerce' ); ?></h2>
	</div>
	<div class="panel-body">
		<p>Already have an account?  <a href="#" class="switch-user-form">Sign in!</a></p>
		<form method="post" class="form-group">
			<?php do_action( 'woocommerce_register_form_start' ); ?>
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
				<div class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide input-group">
					<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="text" class="form-control" name="username" id="reg_username" autocomplete="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</div>
			<?php endif; ?>
			<label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
			<div class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide input-group">
				<span class="input-group-addon color1-background-color color1-border-color"><i class="fa fa-envelope color-1-text-contrast" aria-hidden="true"></i></span>
				<input type="email" class="form-control" name="email" id="reg_email" autocomplete="email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
			</div>
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
				<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
				<div class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide input-group">
					<span class="input-group-addon color1-background-color color1-border-color"><i class="fa fa-user color-1-text-contrast" aria-hidden="true"></i></span>
					<input type="password" class="form-control" name="password" id="reg_password" autocomplete="new-password"/>
				</div>
			<?php endif; ?>
			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off" /></div>
			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>
			<p class="woocomerce-FormRow form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button btn button-primary" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>
			<?php do_action( 'woocommerce_register_form_end' ); ?>
		</form>
	</div><!-- Panel Body End -->
</div><!-- Registration Panel End -->

<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
