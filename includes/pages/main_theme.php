<?php
///////////////////////////////SETTINGS\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function theme_init() {
	//THEME SETTINGS
	register_setting("flatty_theme", "flatty_post_style");
	register_setting("flatty_theme", "flatty_system_font");

	//SIDEBAR SETTINGS
	register_setting("flatty_theme", "flatty_sidebar_folded");

	//WHITELABELING
	register_setting("flatty_theme", "flatty_wp_hide_topbar_logo");
	register_setting("flatty_theme", "flatty_wordpress_remove_generator");

	//FOOTER
	register_setting("flatty_theme", "flatty_wp_flatty_footer_show");
	register_setting("flatty_theme", "flatty_wp_flatty_footer_show_wordpress");
	register_setting("flatty_theme", "flatty_wp_flatty_footer_show_mysql");
	register_setting("flatty_theme", "flatty_wp_flatty_footer_show_php");
	register_setting("flatty_theme", "flatty_wp_flatty_footer_show_server_protocol");
	register_setting("flatty_theme", "flatty_wp_flatty_footer_show_server_address");
	register_setting("flatty_theme", "flatty_wp_flatty_footer_show_server_software");

}

add_action("admin_init","theme_init");

//////////////////////////////////////////////////////////////////////////////////////////////////PAGE
function options_main_theme() {
	?>

	<form method='post' action='options.php'>

		<div class="wrap flatty-form">

	        <div class="page-title">
	            <img src="<?php echo plugins_url(FLATTY_PLUGIN_URL . 'assets/flatty-logo.png') ?>" class="flatty-logo"/>
	            <div class="header"><?php _e('Theme', 'flatty-flat-admin-theme' ); ?></div>
	        </div>

				<div id="theme-box" class="postbox flatty">
					<div class="title">
	            <i class="dashicons dashicons-admin-appearance" style="background-color: #4ac9c9;"></i>
	            <span><?php _e('Theme', 'flatty-flat-admin-theme' ); ?></span>
	        </div>

					<div class="option">
						<label for="flatty_post_style"><?php _e('Disable Flatty\'s "new post" styling', 'flatty-flat-admin-theme' ); ?></label>
						<input
							type="checkbox"
							name="flatty_post_style"
							id="flatty_post_style"
							value='1'
							<?php checked(1, get_option('flatty_post_style')); ?>
						/>
					</div>

					<div class="option">
						<label for="flatty_system_font"><?php _e('Use system Font instead of Google Font', 'flatty-flat-admin-theme' ); ?></label>
						<input
							type="checkbox"
							name="flatty_system_font"
							id="flatty_system_font"
							value='1'
							<?php checked(1, get_option('flatty_system_font')); ?>
						/>
						<div class="flatty-description"><?php _e('System font is quicker, custom font is nicer', 'flatty-flat-admin-theme' ); ?></div>
					</div>

	    	</div>

				<div id="sidebar-box" class="postbox flatty">
					<div class="title">
	                    <i class="dashicons dashicons-menu" style="background-color: #6b90a7;"></i>
	                    <span><?php _e('Sidebar', 'flatty-flat-admin-theme' ); ?></span>
	                </div>

					<div class="option">
						<label for="flatty_sidebar_folded"><?php _e('Enable always folded sidebar', 'flatty-flat-admin-theme' ); ?></label>
						<input
							type="checkbox"
							name="flatty_sidebar_folded"
							id="flatty_sidebar_folded"
							value='1'
							<?php checked(1, get_option('flatty_sidebar_folded')); ?>
						/>
					</div>

	            </div>

				<div id="whitelabel-box" class="postbox flatty">
					<div class="title">
	                    <i class="dashicons dashicons-wordpress" style="background-color: #404386;"></i>
	                    <span><?php _e('Whitelabel Wordpress', 'flatty-flat-admin-theme' ); ?></span>
	                </div>

					<div class="option">
						<label for="flatty_wordpress_remove_generator"><?php _e('Remove Wordpress meta tags', 'flatty-flat-admin-theme' ); ?></label>
						<input
							type="checkbox"
							name="flatty_wordpress_remove_generator"
							id="flatty_wordpress_remove_generator"
							value='1'
							<?php checked(1, get_option('flatty_wordpress_remove_generator')); ?>
						/>
						<div class="flatty-description"><?php _e('Like "generated by Wordpress" and Wordpress version', 'flatty-flat-admin-theme' ); ?></div>
					</div>

					<div class="option">
						<label for="flatty_wp_hide_topbar_logo"><?php _e('Hide Wordpress Logo', 'flatty-flat-admin-theme' ); ?></label>
						<input
							type="checkbox"
							name="flatty_wp_hide_topbar_logo"
							id="flatty_wp_hide_topbar_logo"
							value='1'
							<?php checked(1, get_option('flatty_wp_hide_topbar_logo')); ?>
						/>
						<div class="flatty-description"><?php _e('If Wordpress default topbar is enabled', 'flatty-flat-admin-theme' ); ?></div>
					</div>

	            </div>

	            <div id="footer-box" class="postbox flatty">
					<div class="title">
	                    <i class="dashicons dashicons-info" style="background-color: #F44336;"></i>
	                    <span><?php _e('Custom Footer', 'flatty-flat-admin-theme' ); ?></span>
	                </div>

	                <div class="option">
						<label for="flatty_wp_flatty_footer_show"><?php _e('Enable Flatty\'s Custom Footer', 'flatty-flat-admin-theme' ); ?></label>
						<input
							type="checkbox"
							name="flatty_wp_flatty_footer_show"
							id="flatty_wp_flatty_footer_show"
							value='1'
							<?php checked(1, get_option('flatty_wp_flatty_footer_show')); ?>
						/>
						<div class="flatty-description"><?php _e('This will hide Worpdress "Thank You" by default', 'flatty-flat-admin-theme' ); ?></div>
					</div>

					<div id="flatty_custom_footer" style="background:#eee; border-bottom: solid 1px #e6e6e6;">

						<div class="option">
							<label for="flatty_wp_flatty_footer_show_wordpress"><?php _e('Show Wordpress version', 'flatty-flat-admin-theme' ); ?></label>
							<input
								type="checkbox"
								name="flatty_wp_flatty_footer_show_wordpress"
								id="flatty_wp_flatty_footer_show_wordpress"
								value='1'
								<?php checked(1, get_option('flatty_wp_flatty_footer_show_wordpress')); ?>
							/>
						</div>

						<div class="option">
							<label for="flatty_wp_flatty_footer_show_mysql"><?php _e('Show MySql version', 'flatty-flat-admin-theme' ); ?></label>
							<input
								type="checkbox"
								name="flatty_wp_flatty_footer_show_mysql"
								id="flatty_wp_flatty_footer_show_mysql"
								value='1'
								<?php checked(1, get_option('flatty_wp_flatty_footer_show_mysql')); ?>
							/>
						</div>

						<div class="option">
							<label for="flatty_wp_flatty_footer_show_php"><?php _e('Show Php version', 'flatty-flat-admin-theme' ); ?></label>
							<input
								type="checkbox"
								name="flatty_wp_flatty_footer_show_php"
								id="flatty_wp_flatty_footer_show_php"
								value='1'
								<?php checked(1, get_option('flatty_wp_flatty_footer_show_php')); ?>
							/>
						</div>

						<div class="option">
							<label for="flatty_wp_flatty_footer_show_server_protocol"><?php _e('Show server protocol (Ex: HTTP/1.1)', 'flatty-flat-admin-theme' ); ?></label>
							<input
								type="checkbox"
								name="flatty_wp_flatty_footer_show_server_protocol"
								id="flatty_wp_flatty_footer_show_server_protocol"
								value='1'
								<?php checked(1, get_option('flatty_wp_flatty_footer_show_server_protocol')); ?>
							/>
						</div>

						<div class="option">
							<label for="flatty_wp_flatty_footer_show_server_address"><?php _e('Show server address', 'flatty-flat-admin-theme' ); ?></label>
							<input
								type="checkbox"
								name="flatty_wp_flatty_footer_show_server_address"
								id="flatty_wp_flatty_footer_show_server_address"
								value='1'
								<?php checked(1, get_option('flatty_wp_flatty_footer_show_server_address')); ?>
							/>
						</div>

						<div class="option">
							<label for="flatty_wp_flatty_footer_show_server_software"><?php _e('Show server identification string', 'flatty-flat-admin-theme' ); ?></label>
							<input
								type="checkbox"
								name="flatty_wp_flatty_footer_show_server_software"
								id="flatty_wp_flatty_footer_show_server_software"
								value='1'
								<?php checked(1, get_option('flatty_wp_flatty_footer_show_server_software')); ?>
							/>
						</div>

					</div>

	            </div>

		</div>

		<div class="buttons-container">
			<?php
				settings_fields('flatty_theme');
				submit_button('', 'primary large flatty-button-update');
			?>
			<div class="flatty-single"><?php _e('*Don\'t forget to save changes', 'flatty-flat-admin-theme' ); ?></div>
		</div>

	</form>

	<?php
}

?>
