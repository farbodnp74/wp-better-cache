<?php

function wbc_clear_cache() {
    $files = glob(__DIR__ . '/cache/*.html');
    foreach ($files as $file) {
        unlink($file);
    }
}
