<?php

require template_path('includes/functions/tinymce/label_button.php');
//require template_path('includes/functions/tinymce/tooltip_box.php');


function wp_mce_custom_formats($formats)
{
    array_unshift($formats, 'styleselect');
    return $formats;
}

add_filter('mce_buttons_2', 'wp_mce_custom_formats');

function insert_custom_formats($init_array)
{
    $style_formats = [
        [
            'title' => 'Titres',
            'items' => [
                [
                    'title' => 'Titre H1',
                    'block' => 'h1',
                    'classes' => 'title-h1'
                ],
                [
                    'title' => 'Titre H2',
                    'block' => 'h2',
                    'classes' => 'title-h2'
                ],
                [
                    'title' => 'Titre H3',
                    'block' => 'h3',
                    'classes' => 'title-h3'
                ],
                [
                    'title' => 'Titre H4',
                    'block' => 'h4',
                    'classes' => 'title-h4'
                ],
                [
                    'title' => 'Titre H5',
                    'block' => 'h5',
                    'classes' => 'title-h5'
                ],
                [
                    'title' => 'Titre H6',
                    'block' => 'h6',
                    'classes' => 'title-h6'
                ],
                [
                    'title' => 'Paragraphe principal',
                    'block' => 'p',
                    'classes' => 'primary-p'
                ],
                [
                    'title' => 'Paragraphe secondaire',
                    'block' => 'p',
                    'classes' => 'secondary-p'
                ]
            ]
        ],
        [
            'title' => 'Petits titres',
            'items' => [
                [
                    'title' => 'Surtitre',
                    'block' => 'span',
                    'classes' => 'surtitle',
                    'wrapper' => true
                ],
                [
                    'title' => 'Surtitre (petit)',
                    'block' => 'span',
                    'classes' => 'surtitle-sm',
                    'wrapper' => true
                ],
                [
                    'title' => 'Sous-titre',
                    'block' => 'span',
                    'classes' => 'subtitle',
                    'wrapper' => true
                ],
                [
                    'title' => 'Sous-titre (petit)',
                    'block' => 'span',
                    'classes' => 'subtitle-sm',
                    'wrapper' => true
                ]
            ]
        ],
    ];

    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;
}

add_filter('tiny_mce_before_init', 'insert_custom_formats');

function insert_custom_colors($options)
{
    $options['textcolor_map'] = json_encode(
        array(
            '4E2583', 'Violet (défaut)',
            '7D5CA3', 'Violet (moyen)',
            '9F88BF', 'Violet (clair)',
            'F5CC02', 'Jaune (défaut)',
            'F9DA6E', 'Jaune (moyen)',
            'FBE59D', 'Jaune (clair)',
            '7F9768', 'Vert pâle (défaut)',
            'A1AF8B', 'Vert pâle (moyen)',
            'B1C0A4', 'Vert pâle (clair)',
            'F18755', 'Orange (défaut)',
            'F4A176', 'Orange (moyen)',
            'F9C6A9', 'Orange (clair)',
            '2C58A4', 'Bleu (défaut)',
            '5A74B7', 'Bleu (moyen)',
            '9AA5D4', 'Bleu (clair)',
            '0096A0', 'Turquoise (défaut)',
            '44A9B2', 'Turquoise (moyen)',
            '9CC9CF', 'Turquoise (clair)',
            '30A561', 'Vert (défaut)',
            '6EB67F', 'Vert (moyen)',
            'ADD2B0', 'Vert (clair)',
            'DB3752', 'Rouge (défaut)',
            'E2676F', 'Rouge (moyen)',
            'EDA5A3', 'Rouge (clair)',
            'FFFFFF', 'Blanc',
            '000000', 'Noir',
            '302F3C', 'Gris (très foncé)',
            '6F6F79', 'Gris (foncé)',
            'A7A6B1', 'Gris (moyen)',
            'D2D2D6', 'Gris (fond)',
            'F1F1F1', 'Gris (clair)',
            'FAFAFA', 'Gris (très clair)'
        )
    );

    return $options;
}

add_filter('tiny_mce_before_init', 'insert_custom_colors');

