<?php

function register_projects_cpt() {
    $labels = array(
        'name'               => __( 'Projects', 'tailpress' ),
        'singular_name'      => __( 'Project', 'tailpress' ),
        'menu_name'          => __( 'Projects', 'tailpress' ),
        'name_admin_bar'     => __( 'Project', 'tailpress' ),
        'add_new'            => __( 'Add New', 'tailpress' ),
        'add_new_item'       => __( 'Add New Project', 'tailpress' ),
        'new_item'           => __( 'New Project', 'tailpress' ),
        'edit_item'          => __( 'Edit Project', 'tailpress' ),
        'view_item'          => __( 'View Project', 'tailpress' ),
        'all_items'          => __( 'All Projects', 'tailpress' ),
        'search_items'       => __( 'Search Projects', 'tailpress' ),
        'not_found'          => __( 'No projects found.', 'tailpress' ),
        'not_found_in_trash' => __( 'No projects found in Trash.', 'tailpress' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_rest'       => true, 
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'            => array( 'slug' => 'projects' ),
    );

    register_post_type( 'projects', $args );
}
add_action( 'init', 'register_projects_cpt' );


function register_project_taxonomy() {
    $labels = array(
        'name'              => __( 'Project Categories', 'tailpress' ),
        'singular_name'     => __( 'Project Category', 'tailpress' ),
        'search_items'      => __( 'Search Categories', 'tailpress' ),
        'all_items'         => __( 'All Categories', 'tailpress' ),
        'parent_item'       => __( 'Parent Category', 'tailpress' ),
        'parent_item_colon' => __( 'Parent Category:', 'tailpress' ),
        'edit_item'         => __( 'Edit Category', 'tailpress' ),
        'update_item'       => __( 'Update Category', 'tailpress' ),
        'add_new_item'      => __( 'Add New Category', 'tailpress' ),
        'new_item_name'     => __( 'New Category Name', 'tailpress' ),
        'menu_name'         => __( 'Categories', 'tailpress' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true, 
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true, 
        'rewrite'           => array( 'slug' => 'project-category' ),
    );

    register_taxonomy( 'project_category', 'projects', $args );
}
add_action( 'init', 'register_project_taxonomy' );