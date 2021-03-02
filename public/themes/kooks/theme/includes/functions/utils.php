<?php

require template_path('includes/functions/pagenavi_settings.php');

function calc_width_percent($number, $total)
{
    return strval(round($total / $number, 2)) . "%";
}

function get_table_by_index($selected_table, $tables)
{
    $result = null;
    foreach ($tables as $tableIndex => $table) {
        if ($table['table_id'] === $selected_table) {
            $result = $table;
            break;
        }
    }

    return $result;
}

function slug($string, $delimiter = '-')
{
    $oldLocale = setlocale(LC_ALL, '0');
    setlocale(LC_ALL, 'en_US.UTF-8');
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower($clean);
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
    $clean = trim($clean, $delimiter);
    setlocale(LC_ALL, $oldLocale);
    return $clean;
}

function fetch_all_posts($settings, $featured_post = null, $posts_per_page = -1, $is_paged = false)
{
    $terms = get_post_cats_and_tags_id($settings['tags'], $settings['categories']);
    $featured_id = $featured_post ? $featured_post->ID : '';

    $args = [
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'status'         => 'publish',
        'category__in'   => $terms['categories'],
        'tag__in'        => $terms['tags'],
        'paged'          => $is_paged ? get_query_var('paged') : false,
        'post__not_in'   => [$featured_id],
        's'              => isset($settings['keywords']) ? $settings['keywords'] : null
    ];

    return new WP_Query($args);
}

function format_posts($posts)
{
    $formatted_posts = [];

    foreach ($posts as $post) {
        $tmp = [];
        $post_date = new DateTime($post->post_date);
        $date = [
            'day'   => date_format($post_date, 'd'),
            'month' => date_format($post_date, 'M'),
            'year'  => date_format($post_date, 'Y')
        ];
        $tags = get_the_tags($post);
        $t = [];
        if (!empty($tags)) {
            foreach ($tags as $tag) {
                $temp = [];
                $attached_category = get_field('attached_category', $tag) ?? null;
                $cat = get_category($attached_category) ?? null;
                $redirection = get_field('category_redirection', $cat) ?? null;
                $formatted_redirection = $redirection ? $redirection['url'] . '?keywords=' . $tag->name : null;
                $temp['name'] = $tag->name;
                $temp['redirection'] = $formatted_redirection;
                $t[] = $temp;
            }
        }

        $tmp['post'] = $post;
        $tmp['tags'] = $t;
        $tmp['raw_tags'] = $tags;
        $tmp['url'] = get_permalink($post);
        $tmp['thumbnail'] = get_the_post_thumbnail_url($post);
        $tmp['excerpt'] = get_the_excerpt($post);
        $tmp['title'] = get_the_title($post);
        $tmp['date'] = $date;

        $formatted_posts[] = $tmp;
    }

    return $formatted_posts;
}

function get_post_cats_and_tags_id($tags, $categories)
{
    $terms = [];
    if (!empty($categories)) {
        foreach ($categories as $category) {
            $terms['categories'][] = $category->term_id;
        }
    } else $terms['categories'] = [];
    if (!empty($tags)) {
        foreach ($tags as $tag) {
            $terms['tags'][] = $tag->term_id;
        }
    } else $terms['tags'] = [];

    return $terms;
}

function jsonToProp($data)
{
    return htmlentities(json_encode($data, JSON_HEX_QUOT), ENT_QUOTES);
}

add_filter('frm_api_request_args', 'my_custom_frm_api_request_header', 10, 2);
function my_custom_frm_api_request_header($arg_array, $args)
{
    if ($args['url'] == env('CONTACT_URL')) { // the full url where the request is being sent
        $arg_array['headers']['codeApplication'] = 'webPublicITE';
        $arg_array['headers']['typeApplication'] = 'WEB';
        $arg_array['headers']['mutuelleGestion'] = 'ITE';
        $arg_array['headers']['apiKey'] = env('API_KEY');
    }

    return $arg_array;
}

function render_video($video)
{
    return str_replace('youtube.com/embed/', 'youtube-nocookie.com/embed/', $video);
}

function head_scripts()
{
    if (function_exists('get_field')) {
        echo(get_field('head_script', 'options'));
    };
}

add_action('wp_head', 'head_scripts');

function footer_scripts()
{
    if (function_exists('get_field')) {
        echo(get_field('footer_script', 'options'));
    };
}

add_action('wp_footer', 'footer_scripts');

function body_scripts()
{
    if (function_exists('get_field')) {
        echo(get_field('body_script', 'options'));
    };
}

