<?php

/**
 * Fired during plugin activation.
 * This class defines all code necessary to run during the plugin's activation.
 */

class Lsw_Wp_Multi_Domains_Activator {

	public static function activate() {
		add_action( 'admin_notices', 'my_error_notice' );
	}

	function my_error_notice() {
		?>
		<div class="error notice">
			<p><?php _e( 'There has been an error. Bummer!', 'my_plugin_textdomain' ); ?></p>
		</div>
		<?php
	}

}
