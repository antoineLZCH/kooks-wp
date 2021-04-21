<?php

acf_register_block_type([
    'slug' => 'block-background', // Better keep a naming convention : PAGE_BLOCK like home_background
    'name' => 'block-background',
    'title' => __("Bloc de background", 'kooks'),
    'description' => __("Bloc de background", 'kooks'),
    'render_callback' => 'block_background',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'id',
    'keywords' => ['block', 'background', 'generic', 'kooks'],
]);

function block_background($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
