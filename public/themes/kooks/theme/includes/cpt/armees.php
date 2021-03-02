<?php
//
//function cptui_register_my_cpts_armees() {
//
//    /**
//     * Post Type: Armées.
//     */
//
//    $labels = [
//        "name" => __( "Armées", "custom-post-type-ui" ),
//        "singular_name" => __( "Armées", "custom-post-type-ui" ),
//        "menu_name" => __( "Armées", "custom-post-type-ui" ),
//    ];
//
//    $args = [
//        "label" => __( "Armées", "custom-post-type-ui" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => false,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "delete_with_user" => false,
//        "exclude_from_search" => false,
//        "capability_type" => "page",
//        "map_meta_cap" => true,
//        "hierarchical" => true,
//        "rewrite" => [ "slug" => "armees", "with_front" => true ],
//        "query_var" => true,
//        "menu_icon" => "dashicons-groups",
//        "supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
//        "taxonomies" => [ "category" ],
//    ];
//
//    register_post_type( "armees", $args );
//}
//
//add_action( 'init', 'cptui_register_my_cpts_armees' );
