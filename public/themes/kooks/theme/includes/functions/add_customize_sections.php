<?php

add_action('customize_register', 'add_interiale_customizer');

function add_interiale_customizer($wp_customize)
{

    $wp_customize->add_panel('interiale_theme_options', array(
        'priority' => 100,
        'title' => __('Options du thème', 'interiale'),
        'description' => __("Permet la modification des options du thème", 'interiale')
    ));

    $wp_customize->add_section("interiale_social_networks", array(
        'title' => __('Réseaux sociaux'),
        'priority' => 1,
        'panel' => 'interiale_theme_options'
    ));

}
