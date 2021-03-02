<?php

function cptui_register_my_cpts_documents()
{

    /**
     * Post Type: Documents.
     */

    $labels = [
        "name" => __("Documents", "custom-post-type-ui"),
        "singular_name" => __("Document", "custom-post-type-ui"),
        "menu_name" => __("Documents", "custom-post-type-ui"),
        "all_items" => __("All Documents", "custom-post-type-ui"),
        "add_new" => __("Add new", "custom-post-type-ui"),
        "add_new_item" => __("Add new Document", "custom-post-type-ui"),
        "edit_item" => __("Edit Document", "custom-post-type-ui"),
        "new_item" => __("New Document", "custom-post-type-ui"),
        "view_item" => __("View Document", "custom-post-type-ui"),
        "view_items" => __("View Documents", "custom-post-type-ui"),
        "search_items" => __("Search Documents", "custom-post-type-ui"),
        "not_found" => __("No Documents found", "custom-post-type-ui"),
        "not_found_in_trash" => __("No Documents found in trash", "custom-post-type-ui"),
        "parent" => __("Parent Document:", "custom-post-type-ui"),
        "featured_image" => __("Featured image for this Document", "custom-post-type-ui"),
        "set_featured_image" => __("Set featured image for this Document", "custom-post-type-ui"),
        "remove_featured_image" => __("Remove featured image for this Document", "custom-post-type-ui"),
        "use_featured_image" => __("Use as featured image for this Document", "custom-post-type-ui"),
        "archives" => __("Document archives", "custom-post-type-ui"),
        "insert_into_item" => __("Insert into Document", "custom-post-type-ui"),
        "uploaded_to_this_item" => __("Upload to this Document", "custom-post-type-ui"),
        "filter_items_list" => __("Filter Documents list", "custom-post-type-ui"),
        "items_list_navigation" => __("Documents list navigation", "custom-post-type-ui"),
        "items_list" => __("Documents list", "custom-post-type-ui"),
        "attributes" => __("Documents attributes", "custom-post-type-ui"),
        "name_admin_bar" => __("Document", "custom-post-type-ui"),
        "item_published" => __("Document published", "custom-post-type-ui"),
        "item_published_privately" => __("Document published privately.", "custom-post-type-ui"),
        "item_reverted_to_draft" => __("Document reverted to draft.", "custom-post-type-ui"),
        "item_scheduled" => __("Document scheduled", "custom-post-type-ui"),
        "item_updated" => __("Document updated.", "custom-post-type-ui"),
        "parent_item_colon" => __("Parent Document:", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Documents", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "Vous permet de renseigner des documents spécifiques : Brochures, Catalogues, etc.",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "documents", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-media-document",
        "supports" => ["title", "thumbnail", "excerpt", "custom-fields"],
    ];

    register_post_type("documents", $args);
}

add_action('init', 'cptui_register_my_cpts_documents');
