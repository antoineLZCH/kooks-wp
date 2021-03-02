<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();
$timber_post = Timber::query_post();
$context['post'] = $timber_post;
$custom_fields = get_fields($timber_post);
$default_redirection = $context['options']['default_articles_redirection']['url'] ?? "";
$custom_redirection = $custom_fields['articles_redirection']['url'] ?? $default_redirection;

$post_tags = get_the_tags($timber_post);
$tags = [];
if ($post_tags) {
    foreach ($post_tags as $post_tag) {
        $temp = [];
        $attached_category = get_field('attached_category', $post_tag) ?? null;
        $cat = get_category($attached_category) ?? null;
        $redirection = get_field('category_redirection', $cat) ?? null;
        $formatted_redirection = $redirection ? $redirection['url'] . '?keywords=' . $post_tag->name : null;
        $temp['name'] = $post_tag->name;
        $temp['redirection'] = $formatted_redirection;
        $tags[] = $temp;
    }
}
$context['tags'] = $tags;

$post_date = new DateTime($timber_post->post_date);
$post_date = date_format($post_date, 'd/m/Y');
$context['date'] = $post_date;

$reading_time = "";
if ($custom_fields['reading_time_group']) {
    $reading_time_group = $custom_fields['reading_time_group'];
    $reading_time = $reading_time_group['reading_time'] . ' ' . $reading_time_group['reading_time_text'];
}
$context['reading_time'] = $reading_time;
$context['header_image'] = $custom_fields['article_image'];

$share = [];
$share['url'] = urlencode(get_permalink($timber_post));
$share['title'] = urlencode(html_entity_decode($timber_post));
$context['share'] = $share;

$next = get_next_post();
$previous = get_previous_post();
$context['next_article'] = $next ? get_permalink($next) : null;
$context['previous_article'] = $previous ? get_permalink($previous) : null;
$context['articles_redirection'] = $custom_redirection ?? $default_redirection;

if (post_password_required($timber_post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render(array('single-' . $timber_post->ID . '.twig', 'single-' . $timber_post->post_type . '.twig', 'single-' . $timber_post->slug . '.twig', 'single.twig'), $context);
}
