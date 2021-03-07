<?php

acf_register_block_type([
    'slug' => 'block-headline', // Better keep a naming convention : PAGE_BLOCK like home_header
    'name' => 'block-headline',
    'title' => __("Bloc de headline", 'kooks'),
    'description' => __("Bloc de headline", 'kooks'),
    'render_callback' => 'block_headline',
    'category' => 'formatting',
    'mode' => 'auto',
    'icon' => 'admin-home',
    'keywords' => ['block', 'headline', 'generic', 'kooks'],
]);

function block_headline($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
