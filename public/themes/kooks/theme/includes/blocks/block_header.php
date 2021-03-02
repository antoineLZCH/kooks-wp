<?php

acf_register_block_type([
    'slug' => 'block-header', // Better keep a naming convention : PAGE_BLOCK like home_header
    'name' => 'block-header',
    'title' => __("Bloc de header", 'kooks'),
    'description' => __("Bloc de header", 'kooks'),
    'render_callback' => 'block_header',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'admin-home',
    'keywords' => ['block', 'header', 'generic', 'kooks'],
]);

function block_header($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
