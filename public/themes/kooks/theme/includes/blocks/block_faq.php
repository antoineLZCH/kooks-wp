<?php

acf_register_block_type([
    'slug' => 'block-faq', // Better keep a naming convention : PAGE_BLOCK like home_faq
    'name' => 'block-faq',
    'title' => __("Bloc de faq", 'kooks'),
    'description' => __("Bloc de faq", 'kooks'),
    'render_callback' => 'block_render_faq',
    'category' => 'formatting',
    'mode' => 'auto',
    'icon' => 'lightbulb',
    'keywords' => ['block', 'faq', 'generic', 'kooks'],
]);

function block_render_faq($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $questions = $context['options']['questions'];

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['questions'] = $questions;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}
