<?php

function register_cpts() {
    $folder = get_template_directory() . '/includes/cpt';
    foreach(scandir($folder) as $filename) {
        $path = $folder . '/' . $filename;
        if(is_file($path)) {
            require_once $path;
        }
    }
}

add_action('after_setup_theme', 'register_cpts');
