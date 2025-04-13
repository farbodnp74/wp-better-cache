<?php

function wbc_start_buffer() {
    ob_start('wbc_cache_callback');
}

function wbc_end_buffer() {
    ob_end_flush();
}

function wbc_cache_callback($buffer) {
    $cache_file = __DIR__ . '/cache/' . md5($_SERVER['REQUEST_URI']) . '.html';

    if (!file_exists(dirname($cache_file))) {
        mkdir(dirname($cache_file), 0755, true);
    }

    file_put_contents($cache_file, $buffer);
    return $buffer;
}
