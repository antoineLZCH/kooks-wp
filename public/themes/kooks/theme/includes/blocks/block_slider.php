<?php

acf_register_block_type([
    'slug' => 'block-slider', // Better keep a naming convention : PAGE_BLOCK like home_slider
    'name' => 'block-slider',
    'title' => __("Bloc de slider", 'kooks'),
    'description' => __("Bloc de slider", 'kooks'),
    'render_callback' => 'block_slider',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'format-gallery',
    'keywords' => ['block', 'header', 'generic', 'kooks'],
]);

function block_slider($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
