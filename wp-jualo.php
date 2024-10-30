<?php
/*
Plugin Name: Jualo
Plugin URI: http://www.jualo.com
Description: Jualo give easy access to your Jualo Accounts so you can check your profile, or your posted ads. 
Version: 1.0
Author: Yunus Sim
Author URI: http://www.jualo.com
*/

/*******************
* global variable
*******************/
$pluginName = "Jualo";

// get settings
$jualo_options = get_option('jualo_settings');

/*******************
* includes
*******************/

include('includes/scripts.php'); //JS/CSS scripts
include('includes/display.php'); // wordpress display
include('includes/admin-page.php');