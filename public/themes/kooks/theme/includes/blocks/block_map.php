<?php

acf_register_block_type([
    'slug' => 'block-map', // Better keep a naming convention : PAGE_BLOCK like home_map
    'name' => 'block-map',
    'title' => __("Bloc de map", 'kooks'),
    'description' => __("Bloc de map", 'kooks'),
    'render_callback' => 'block_map',
    'category' => 'cards',
    'mode' => 'auto',
    'icon' => 'location-alt',
    'keywords' => ['block', 'map', 'generic', 'kooks'],
    'enqueue_script' => get_template_directory_uri() . '/assets/scripts/map.js',
]);

function block_map($block, $content = '', $is_preview = true)
{
    $context = Timber::get_context();
    $fields = get_fields();

    $context['block'] = $block;
    $context['fields'] = $fields;
    $context['is_preview'] = $is_preview;
    $context['id'] = $fields['id'] ?? null;

    $locations = fetch_locations($context['options']);
    $context['locations'] = $locations;

    Timber::render('blocks/' . strtolower($block['slug']) . '.twig', $context);
}

function fetch_locations($options)
{
    $locations = $options['sales_points'];
    $locs = [];
    foreach ($locations as $location) {
        $l = [];
        $l['logo'] = $location['logo'];
        $l['name'] = $location['name'];
        $l['address'] = $location['address'];
        $l['coordinates'] = get_lat_lng($location['address']);
        $locs[] = $l;
    }
    return $locs;
}


function get_lat_lng($address)
{
    $address = rawurlencode($address);
    $coord = get_transient('geocode_' . $address);
    if (empty($coord)) {
        $url = 'http://nominatim.openstreetmap.org/?format=json&addressdetails=1&q=' . $address . '&format=json&limit=1';
        $json = wp_remote_get($url);
        if (200 === (int)wp_remote_retrieve_response_code($json)) {
            $body = wp_remote_retrieve_body($json);
            $json = json_decode($body, true);
        }
        $coord['lat'] = $json[0]['lat'];
        $coord['long'] = $json[0]['lon'];
        set_transient('geocode_' . $address, $coord, DAY_IN_SECONDS * 90);
    }
    return $coord;

}
