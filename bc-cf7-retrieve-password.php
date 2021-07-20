<?php
/*
Author: Beaver Coffee
Author URI: https://beaver.coffee
Description: Password retrieval with Contact Form 7.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Plugin Name: Retrieve Password
Plugin URI: https://github.com/beavercoffee/bc-cf7-retrieve-password
Requires at least: 5.7
Requires PHP: 5.6
Text Domain: bc-cf7-retrieve-password
Version: 1.7.19
*/

if(defined('ABSPATH')){
    require_once(plugin_dir_path(__FILE__) . 'classes/class-bc-cf7-retrieve-password.php');
    BC_CF7_Retrieve_Password::get_instance(__FILE__);
}
