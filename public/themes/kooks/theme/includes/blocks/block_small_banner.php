<?php

acf_register_block_type([
    'slug' => 'block-small-banner', // Better keep a naming convention : PAGE_BLOCK like home_small-banner
    'name' => 'block-small-banner',
    'title' => __("Bloc de petite bannière", 'kooks'),
    'description' => __("Bloc permettant d'ajouter une image sous format bannière. ATTENTION : Ne s'affiche pas sur mobile (volontaire)", 'kooks'),
    'render_callback' => 'block_small_banner',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'id',
    'keywords' => ['block', 'banner', 'generic', 'kooks'],
]);

function block_small_banner($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
