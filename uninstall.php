<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

array_map('unlink', glob(plugin_dir_path(__FILE__) . 'cache/*.html'));
