<?php

acf_register_block_type([
    'slug' => 'block-contact', // Better keep a naming convention : PAGE_BLOCK like home_contact
    'name' => 'block-contact',
    'title' => __("Bloc de contact", 'kooks'),
    'description' => __("Bloc de contact", 'kooks'),
    'render_callback' => 'block_contact',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'id',
    'keywords' => ['block', 'contact', 'generic', 'kooks'],
]);

function block_contact($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
