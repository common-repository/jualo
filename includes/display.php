<?php
	
	function jualo_add_content($name) {
		global $jualo_options;
		if(is_single() && $jualo_options['enable']==true) {
			$content = $jualo_options['jualo_url'];
		} else {
			
		}
		//return $content;
		echo $content;
	}
	
	//add_filter('the_content', 'jualo_add_content');
	add_action('wp_meta', 'jualo_add_content');
