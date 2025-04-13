<?php
/*
Plugin Name: WP Better Cache
Description: the plugin to improve WordPress caching.
Version: 1.2
Author: farbod
*/

defined('ABSPATH') or die('No script kiddies please!');

require_once plugin_dir_path(__FILE__) . 'cache-manager.php';
require_once plugin_dir_path(__FILE__) . 'functions.php';
require_once plugin_dir_path(__FILE__) . 'admin-settings.php';


add_action('init', 'wbc_start_buffer');
add_action('shutdown', 'wbc_end_buffer');
