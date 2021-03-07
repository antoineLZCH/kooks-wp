<?php

acf_register_block_type([
    'slug' => 'block-partners', // Better keep a naming convention : PAGE_BLOCK like home_partners
    'name' => 'block-partners',
    'title' => __("Bloc de partenaires KOOK'S", 'kooks'),
    'description' => __("Bloc de partenaires KOOK'S", 'kooks'),
    'render_callback' => 'block_partners',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'admin-home',
    'keywords' => ['block', 'partners', 'generic', 'kooks'],
]);

function block_partners($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
