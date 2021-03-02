<?php

function register_custom_blocks_categories($categories, $post)
{
    return array_merge(
        $categories,
        [
            [
                'slug' => 'headers',
                'title' => __('Blocs de headers', 'headers')
            ],
            [
                'slug' => 'tables',
                'title' => __('Blocs de tableaux', 'tables')
            ],
            [
                'slug' => 'containers',
                'title' => __('Blocs conteneurs', 'containers'),
            ],
            [
                'slug' => 'texts',
                'title' => __('Blocs de textes', 'texts')
            ],
            [
                'slug' => 'bandeaux',
                'title' => __('Blocs de bandeaux', 'bandeaux')
            ],
            [
                'slug' => 'medias',
                'title' => __('Blocs de médias', 'medias')
            ],
            [
                'slug' => 'others',
                'title' => __('Autres', 'others')
            ],
            [
                'slug' => 'cards',
                'title' => __('Blocs de cartes', 'cards')
            ],
            [
                'slug' => 'lists',
                'title' => __('Blocs de listes', 'lists')
            ],
            [
                'slug' => 'actualites',
                'title' => __("Blocs d'affichage des actualités", 'actualites')
            ]
        ]
    );
}

add_filter('block_categories', 'register_custom_blocks_categories', 10, 2);
