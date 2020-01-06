<?php
/**
 * Admin bar
 *
 * Description. (use period)
 *
 * @link URL
 *
 * @package wallpress-child
 * @subpackage wallpress-child/wallpress-child-admin-bar
 * @since 0.1
 */

 /**
 * Remove admin bar for non administrators
 *
 * @since 0.1
 *
 */

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
 	 show_admin_bar(false);
		}
	}


?>
