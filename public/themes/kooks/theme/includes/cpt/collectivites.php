<?php
//
//function cptui_register_my_cpts_collectivites()
//{
//
//    /**
//     * Post Type: Collectivités.
//     */
//
//    $labels = [
//        "name" => __("Collectivités", "custom-post-type-ui"),
//        "singular_name" => __("Collectivité", "custom-post-type-ui"),
//        "menu_name" => __("Collectivités", "custom-post-type-ui"),
//        "all_items" => __("Collectivités", "custom-post-type-ui"),
//        "add_new" => __("Nouvelle page", "custom-post-type-ui"),
//        "add_new_item" => __("Nouvelle page", "custom-post-type-ui"),
//        "edit_item" => __("Éditer la page", "custom-post-type-ui"),
//        "new_item" => __("Nouveau", "custom-post-type-ui"),
//        "view_item" => __("Voir", "custom-post-type-ui"),
//        "view_items" => __("Voir", "custom-post-type-ui"),
//        "search_items" => __("Rechercher", "custom-post-type-ui"),
//        "not_found" => __("Non trouvé", "custom-post-type-ui"),
//        "not_found_in_trash" => __("Non trouvé dans la corbeille", "custom-post-type-ui"),
//        "parent" => __("Parent", "custom-post-type-ui"),
//        "featured_image" => __("Image à la une", "custom-post-type-ui"),
//        "set_featured_image" => __("Définir une image à la une", "custom-post-type-ui"),
//        "remove_featured_image" => __("Supprimer l'image à la une", "custom-post-type-ui"),
//        "use_featured_image" => __("Utiliser comme image à la une", "custom-post-type-ui"),
//        "archives" => __("Archives", "custom-post-type-ui"),
//        "insert_into_item" => __("Insérer", "custom-post-type-ui"),
//        "uploaded_to_this_item" => __("Ajouter", "custom-post-type-ui"),
//        "filter_items_list" => __("Filtrer", "custom-post-type-ui"),
//        "items_list_navigation" => __("Navigation", "custom-post-type-ui"),
//        "items_list" => __("Items", "custom-post-type-ui"),
//        "attributes" => __("Attributs", "custom-post-type-ui"),
//        "name_admin_bar" => __("Pages", "custom-post-type-ui"),
//        "item_published" => __("Page publiée", "custom-post-type-ui"),
//        "item_published_privately" => __("Page publiée en privé", "custom-post-type-ui"),
//        "item_reverted_to_draft" => __("Page retirée des brouillons", "custom-post-type-ui"),
//        "item_scheduled" => __("Page planifiée", "custom-post-type-ui"),
//        "item_updated" => __("Page mise à jour", "custom-post-type-ui"),
//        "parent_item_colon" => __("Parent", "custom-post-type-ui"),
//    ];
//
//    $args = [
//        "label" => __("Collectivités", "custom-post-type-ui"),
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
//        "rewrite" => ["slug" => "collectivites-territoriales", "with_front" => true],
//        "query_var" => true,
//        "menu_icon" => "dashicons-groups",
//        "supports" => ["title", "editor", "thumbnail", "custom-fields"],
//        "taxonomies" => ["category"],
//    ];
//
//    register_post_type("collectivites", $args);
//}
//
//add_action('init', 'cptui_register_my_cpts_collectivites');
