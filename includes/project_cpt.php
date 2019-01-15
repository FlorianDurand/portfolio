<?php 

function ajout_cpt_project() {
    $post_type_project = "project";
$labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'all_items'          => 'All projects',
        'add_new'            => 'Add a project',
        'add_new_item'       => 'Add a project',
        'edit_item'          => "Edit a project",
        'new_item'           => 'Edit a project',
        'view_item'          => "View project",
        'search_items'       => 'Search project',
        'not_found'          => 'No project',
        'not_found_in_trash' => 'No project',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Projects',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-book',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );  
    register_post_type($post_type_project, $args );  
}
add_action( 'init', 'ajout_cpt_project' );

