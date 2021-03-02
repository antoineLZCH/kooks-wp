<?php

add_action('init', 'add_mce_label_button');

function add_mce_label_button()
{
    add_filter('mce_external_plugins', 'mce_add_label_button_plugin');
    add_filter('mce_buttons', 'mce_register_label_button');
}

function mce_add_label_button_plugin($plugin_array)
{
    $plugin_array['mce_label_button'] = get_stylesheet_directory_uri() . '/assets/scripts/tinymce/label-button.js';
    return $plugin_array;
}

function mce_register_label_button($buttons)
{
    array_push($buttons, 'mce_label_button');
    return $buttons;
}

