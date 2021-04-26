<?php

acf_register_block_type([
    'slug' => 'block-contact-link-products', // Better keep a naming convention : PAGE_BLOCK like home_contact-link
    'name' => 'block-contact-link-products',
    'title' => __("Bloc de lien de contact produits", 'kooks'),
    'description' => __("Bloc de lien de contact spécifique à la page produits", 'kooks'),
    'render_callback' => 'block_contact_link_products',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'id',
    'keywords' => ['block', 'contact', 'generic', 'kooks'],
]);

function block_contact_link_products($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
