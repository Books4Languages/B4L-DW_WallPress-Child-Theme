<?php
/**
 * Login
 *
 * Description. (use period)
 *
 * @link URL
 *
 * @package wallpress-child
 * @subpackage wallpress-child/wallpress-child-login
 * @since 0.1
 */

 /**
 * Log in
 *
 * @since 0.1
 *
 */

 function my_custom_login() {
 echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/style.css" />';
 }
 add_action('login_head', 'my_custom_login');

 /**
 * Change to login link your site instead of wordpress
 *
 * @since 0.1
 *
 */

 function my_login_logo_url() {
 return get_bloginfo( 'https://lvps84-39-103-248.mammuts-servidor.es' );
 }
 add_filter( 'login_headerurl', 'my_login_logo_url' );

 function my_login_logo_url_title() {
 return 'Zeliha Site';
 }
 add_filter( 'login_headertitle', 'my_login_logo_url_title' );

 /**
 * Log in error message
 *
 * @since 0.1
 *
 */

 function login_error_override()
 {
     return 'Incorrect login details.';
 }
 add_filter('login_errors', 'login_error_override');

 /**
 * Remove the login page
 *
 * @since 0.1
 *
 */

 function my_login_head() {
 remove_action('login_head', 'wp_shake_js', 12);
 }
 add_action('login_head', 'my_login_head');

 /**
 * Change to redirect users to your homepage instead
 *
 * @since 0.1
 *
 */

 function admin_login_redirect( $redirect_to, $request, $user )
 {
 global $user;
 if( isset( $user->roles ) && is_array( $user->roles ) ) {
 	if( in_array( "administrator", $user->roles ) ) {
 		return $redirect_to;
 	} else {
 		return home_url();
 		}
 	}
 else
 	{
 		return $redirect_to;
 	}
 }
 add_filter("login_redirect", "admin_login_redirect", 10, 3);

 /**
 * Remember check box
 *
 * @since 0.1
 *
 */

 function login_checked_remember_me() {
 add_filter( 'login_footer', 'rememberme_checked' );
 }
 add_action( 'init', 'login_checked_remember_me' );

 function rememberme_checked() {
 echo "<script>document.getElementById('rememberme').checked = true;</script>";
 }


?>
