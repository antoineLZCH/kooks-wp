<?php

acf_register_block_type([
    'slug' => 'block-image-content', // Better keep a naming convention : PAGE_BLOCK like home_header
    'name' => 'block-image-content',
    'title' => __("Bloc de contenu textuel avec image", 'kooks'),
    'description' => __("Bloc de contenu permettant d'ajouter une image, une citation, du texte et un bouton (optionnel)", 'kooks'),
    'render_callback' => 'block_image_content',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'editor-alignleft',
    'keywords' => ['block', 'image', 'content', 'kooks'],
]);

function block_image_content($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
