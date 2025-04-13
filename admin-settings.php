<?php

add_action('admin_menu', function() {
    add_menu_page('WP Better Cache', 'Better Cache', 'manage_options', 'wbc-settings', 'wbc_settings_page');
});

function wbc_settings_page() {
    if (isset($_POST['clear_cache'])) {
        wbc_clear_cache();
        echo '<div class="updated"><p>Cache cleared!</p></div>';
    }

    echo '<div class="wrap">
        <h1>WP Better Cache</h1>
        <form method="post">
            <input type="submit" name="clear_cache" class="button button-primary" value="Clear Cache">
        </form>
    </div>';
}
