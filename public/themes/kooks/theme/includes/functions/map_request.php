<?php

add_action('rest_api_init', function () {
    register_rest_route('map/v1', '/map-request', [
        'methods'  => 'GET',
        'callback' => 'requestMap',
        'permission_callback' => function () {
            return true;
        }
    ]);
});

function requestMap()
{
    if(!env('API_KEY')) {
        return;
    }

    $client = new GuzzleHttp\Client();

    $options = [];

    if(env('ENABLE_PROXY')) {
        $options['proxy'] = env('WP_PROXY_HOST') . ':' . env('WP_PROXY_PORT');
    }

    $options['timeout'] = 5;
    $options['connect_timeout'] = 5;
    $options['headers'] = [
        'codeApplication' => 'webPublicITE',
        'typeApplication' => 'WEB',
        'mutuelleGestion' => 'ITE',
        'apiKey' => env('API_KEY'),
    ];

    $res = $client->request('GET', env('AGENCE_API_URL'), $options);

    echo $res->getBody();

}
