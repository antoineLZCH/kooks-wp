<?php

function cptui_register_my_taxes_documents_types()
{

    /**
     * Taxonomy: Types de documents.
     */

    $labels = [
        "name" => __("Types de documents", "custom-post-type-ui"),
        "singular_name" => __("Type de documents", "custom-post-type-ui"),
        "menu_name" => __("Types de documents", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Types de documents", "custom-post-type-ui"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'documents_types', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "documents_types",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
    ];
    register_taxonomy("documents_types", ["documents"], $args);
}

add_action('init', 'cptui_register_my_taxes_documents_types');

