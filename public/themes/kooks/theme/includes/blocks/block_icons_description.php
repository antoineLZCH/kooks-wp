<?php

acf_register_block_type([
    'slug' => 'block-icons-description', // Better keep a naming convention : PAGE_BLOCK like home_header
    'name' => 'block-icons-description',
    'title' => __("Bloc d'icônes avec description", 'kooks'),
    'description' => __("", 'kooks'),
    'render_callback' => 'block_icons_description',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'admin-home',
    'keywords' => ['block', 'icons', 'description', 'kooks'],
]);

function block_icons_description($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
