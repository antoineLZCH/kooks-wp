<?php

if (function_exists('acf_register_block_type')) {
    function acf_blocks_init()
    {
        $folder = get_template_directory() . '/includes/blocks';
        foreach (scandir($folder) as $filename) {
            $path = $folder . '/' . $filename;
            if (is_file($path)) {
                require $path;
            }
        }
    }

    add_action('acf/init', 'acf_blocks_init');

}
