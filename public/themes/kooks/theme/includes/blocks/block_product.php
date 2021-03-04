<?php

acf_register_block_type([
    'slug' => 'block-product', // Better keep a naming convention : PAGE_BLOCK like home_header
    'name' => 'block-product',
    'title' => __("Bloc de descriptif produit", 'kooks'),
    'description' => __("Bloc vous permettant d'afficher le détail d'un produit", 'kooks'),
    'render_callback' => 'block_product',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'admin-home',
    'keywords' => ['block', 'header', 'generic', 'kooks'],
]);

function block_product($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
