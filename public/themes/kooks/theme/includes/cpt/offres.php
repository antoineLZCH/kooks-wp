<?php

function cptui_register_my_taxes_offer()
{

    /**
     * Taxonomy: Offres.
     */

    $labels = [
        "name" => __("Offres", "custom-post-type-ui"),
        "singular_name" => __("Offre", "custom-post-type-ui"),
        "menu_name" => __("Offres Intériale", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Offres", "custom-post-type-ui"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'offer', 'with_front' => true, 'hierarchical' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "offer",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
    ];
    register_taxonomy("offer", ["formules"], $args);
}

add_action('init', 'cptui_register_my_taxes_offer');
