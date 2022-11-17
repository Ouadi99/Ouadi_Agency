<?php

add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );

function tt_child_enqueue_parent_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}
add_action('init', function() {
    register_post_type('artist', [
        'public' => true,
        'labels' => [
        'name' => 'Artists',
        'singular_name' => 'Artist',
        'add_new_item' => 'Add New Artist',
        'edit_item' => 'Edit Artist',
        'new_item' => 'New Artist',
        'view_item' => 'View Artist',
        'view_items' => 'View Artists',
        'search_items' => 'Search Artists'
    ],
        'show_in_graphql' => true,
        'graphql_single_name' => 'artist',
        'graphql_plural_name' => 'artists',
    ]);
  });
  add_action('init', function() {
    register_taxonomy( 'role', 'artist',
    [
        'public' => true,
        'labels' => [
        'name' => _x( 'Role', 'taxonomy general name' ),
        'singular_name' => _x( 'Role', 'taxonomy singular name' ),
        'search_items' => __( 'Search Roles' ),
        'popular_items' => __( 'Popular Roles' ),
        'all_items' => __( 'All Roles' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Role' ),
        'update_item' => __( 'Update Role' ),
        'add_new_item' => __( 'Add New Role' ),
        'new_item_name' => __( 'New Role Name' ),
        'separate_items_with_commas' => __( 'Separate roles with commas' ),
        'add_or_remove_items' => __( 'Add or remove roles' ),
        'choose_from_most_used' => __( 'Choose from the most used roles' ),
        'menu_name' => __( 'Roles' ),
    ],
        'show_in_graphql' => true,
        'show_admin_column' => true,
        'graphql_single_name' => 'role',
        'graphql_plural_name' => 'roles',
    ]);
});
?>