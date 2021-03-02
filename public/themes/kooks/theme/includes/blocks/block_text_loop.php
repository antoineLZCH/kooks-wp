<?php

acf_register_block_type([
    'slug' => 'block-text-loop', // Better keep a naming convention : PAGE_BLOCK like home_header
    'name' => 'block-text-loop',
    'title' => __("Bloc de texte défilant", 'kooks'),
    'description' => __("Bloc permettant d'ajouter un texte défilant", 'kooks'),
    'render_callback' => 'block_text_loop',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'editor-italic',
    'keywords' => ['block', 'loop', 'text', 'kooks'],
    'enqueue_style' => is_admin() ? get_template_directory_uri() . '/assets/styles/app.css' : '',
]);

function block_text_loop($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
