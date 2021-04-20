<?php

acf_register_block_type([
    'slug' => 'block-contact-link', // Better keep a naming convention : PAGE_BLOCK like home_contact-link
    'name' => 'block-contact-link',
    'title' => __("Bloc de lien de contact", 'kooks'),
    'description' => __("Bloc de lien decontact", 'kooks'),
    'render_callback' => 'block_contact_link',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'id',
    'keywords' => ['block', 'contact', 'generic', 'kooks'],
]);

function block_contact_link($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
