<?php

acf_register_block_type([
    'slug' => 'block-espace-pro', // Better keep a naming convention : PAGE_BLOCK like home_espace_pro
    'name' => 'block-espace-pro',
    'title' => __("Bloc Espace Pro", 'kooks'),
    'description' => __("Bloc Spécifique pour l'espace pro", 'kooks'),
    'render_callback' => 'block_espace_pro',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'id',
    'keywords' => ['block', 'espace_pro', 'generic', 'kooks'],
]);

function block_espace_pro($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
