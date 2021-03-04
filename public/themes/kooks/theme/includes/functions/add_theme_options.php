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
        'page_title' => 'Points de vente',
        'menu_title' => 'Points de vente',
        'parent_slug' => 'theme_options',
        'menu_slug' => 'sales_options',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);


}
