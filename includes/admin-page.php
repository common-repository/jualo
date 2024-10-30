<?php

function jualo_options_page() {
	global $jualo_options;
	ob_start(); ?>
	<div class="wrap">
		<h2>This is title</h2>
		<form method="post" action="options.php">
			<?php settings_fields('jualo_settings_group'); ?>
			<h4><?php _e('Enable', 'jualo_domain'); ?></h4>
			<p>
				<input id="jualo_settings[enable]" name="jualo_settings[enable]" type="checkbox" value="1" <?php checked(1, $jualo_options['enable']); ?> />
				<label class="description" for="jualo_settings[enable]"><?php _e('Display Jualo', 'jualo_domain');?></label>
			</p>
			
			<h4><?php _e('Jualo Information', 'jualo_domain'); ?></h4>
			<p>
				<label class="description" for="jualo_settings[jualo_url]"><?php _e('Enter your Jualo Frame', 'jualo_domain'); ?></label>
				<input id="jualo_settings[jualo_url]" name="jualo_settings[jualo_url]" type="text" value='<?php echo $jualo_options["jualo_url"]; ?>' />
			</p>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'jualo_domain'); ?>" />				
			</p>
		</form>
	</div>
	<?php
	echo ob_get_clean();	
}

function jualo_add_options_page() {
	add_options_page('Jualo','Jualo', 'manage_options', 'jualo-options', 'jualo_options_page');
}

add_action('admin_menu', 'jualo_add_options_page');

function jualo_register_settings() {
	register_setting('jualo_settings_group', 'jualo_settings');
}

add_action('admin_init', 'jualo_register_settings');