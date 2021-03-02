<?php

if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title' => 'Options du thème',
        'menu_title' => 'Options du thème',
        'menu_slug' => 'theme_options',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Options du Madlibs',
        'menu_title' => 'Madlibs',
        'parent_slug' => 'theme_options',
        'menu_slug' => 'madlibs_options',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Options des scripts',
        'menu_title' => 'Scripts',
        'parent_slug' => 'theme_options',
        'menu_slug' => 'scripts_options',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);
}
