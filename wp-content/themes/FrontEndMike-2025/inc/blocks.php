<?php

function my_acf_register_blocks() {
    if (function_exists('acf_register_block_type')) {
        $blocks = [
            [
                'name'            => 'hero',
                'title'           => __('Hero Block'),
                'render_template' => get_template_directory() . '/template-parts/blocks/hero.php',
                'icon'            => 'cover-image',
                'keywords'        => ['Hero', 'Banner'],
                'supports'          => array(
                    'anchor' => true, 
                    'customClassName' => true,
                ),
            ],
            [
                'name'            => 'steps',
                'title'           => __('Steps Block'),
                'render_template' => get_template_directory() . '/template-parts/blocks/steps.php',
                'icon'            => 'cover-image',
                'keywords'        => ['Steps'],
                'supports'          => array(
                    'anchor' => true, 
                    'customClassName' => true,
                ),
            ],
            [
                'name'            => 'image-text',
                'title'           => __('Image & Text Block'),
                'render_template' => get_template_directory() . '/template-parts/blocks/image-text.php',
                'icon'            => 'cover-image',
                'keywords'        => ['Image, Text'],
                'supports'          => array(
                    'anchor' => true, 
                    'customClassName' => true,
                ),
            ],
            [
                'name'            => 'latest-posts',
                'title'           => __('Latest Posts Block'),
                'render_template' => get_template_directory() . '/template-parts/blocks/latest-posts.php',
                'icon'            => 'format-quote',
                'keywords'        => ['Posts', 'Latest'],
            ]
        ];

        foreach ($blocks as $block) {
            acf_register_block_type(array_merge([
                'category'      => 'frontendmike-blocks',
            ], $block));
        }
    }
}
add_action('acf/init', 'my_acf_register_blocks');

function my_custom_block_category($categories) {
    $custom_category = [
        [
            'slug'  => 'frontendmike-blocks',
            'title' => __('FrontendMike Blocks', 'frontendmike'),
            'icon'  => null,
        ]
    ];

    return array_merge($custom_category, $categories); 
}

add_filter('block_categories_all', 'my_custom_block_category');
