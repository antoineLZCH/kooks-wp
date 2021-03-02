<?php
//
//function cptui_register_my_cpts_ecoledepolice() {
//
//    /**
//     * Post Type: Ecole de police.
//     */
//
//    $labels = [
//        "name" => __( "Ecole de police", "custom-post-type-ui" ),
//        "singular_name" => __( "Ecole de police", "custom-post-type-ui" ),
//        "menu_name" => __( "Ecole de police", "custom-post-type-ui" ),
//    ];
//
//    $args = [
//        "label" => __( "Ecole de police", "custom-post-type-ui" ),
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
//        "rewrite" => [ "slug" => "ecole-de-police", "with_front" => true ],
//        "query_var" => true,
//        "menu_icon" => "dashicons-superhero-alt",
//        "supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
//        "taxonomies" => [ "category" ],
//    ];
//
//    register_post_type( "ecole-de-police", $args );
//}
//
//add_action( 'init', 'cptui_register_my_cpts_ecoledepolice' );
