<?php
/**
 *
 * Custom Post Type Example
 *
 */
if( ! function_exists( 'cs_custom_post_type' ) ) {
  function cs_custom_post_type() {

    $post_type_labels      = array(
      'name'               => 'CPTs',
      'singular_name'      => 'CPT',
      'menu_name'          => 'CPT',
      'parent_item_colon'  => 'Parent Item:',
      'all_items'          => 'All CPTs',
      'view_item'          => 'View Item',
      'add_new_item'       => 'Add New Item',
      'add_new'            => 'Add New',
      'edit_item'          => 'Edit Item',
      'update_item'        => 'Update Item',
      'search_items'       => 'Search cpts',
      'not_found'          => 'No cpts found',
      'not_found_in_trash' => 'No cpts found in Trash',
    );

    $post_type_rewrite = array(
      'slug'           => 'cpt-item',
      'with_front'     => true,
      'pages'          => true,
      'feeds'          => true,
    );

    $post_type_args         = array(
      'label'               => 'cpt',
      'description'         => 'CPT information pages',
      'labels'              => $post_type_labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments' ),
      'taxonomies'          => array( 'post' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'rewrite'             => $post_type_rewrite,
      'capability_type'     => 'post',
      'menu_icon'           => 'dashicons-admin-generic',
    );

    register_post_type( 'cpt', $post_type_args );

    $taxonomy_labels                = array(
      'name'                        => 'CPT',
      'singular_name'               => 'CPT',
      'menu_name'                   => 'Categories',
      'all_items'                   => 'All Categories',
      'parent_item'                 => 'Parent Category',
      'parent_item_colon'           => 'Parent Category:',
      'new_item_name'               => 'New Category Name',
      'add_new_item'                => 'Add New Category',
      'edit_item'                   => 'Edit Category',
      'update_item'                 => 'Update Category',
      'separate_items_with_commas'  => 'Separate categories with commas',
      'search_items'                => 'Search categories',
      'add_or_remove_items'         => 'Add or remove categories',
      'choose_from_most_used'       => 'Choose from the most used categories',
    );

    $taxonomy_rewrite = array(
      'slug'          => 'cpt-category',
      'with_front'    => true,
      'hierarchical'  => true,
    );

    $taxonomy_args        = array(
      'labels'            => $taxonomy_labels,
      'hierarchical'      => true,
      'public'            => true,
      'show_ui'           => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud'     => true,
      'rewrite'           => $taxonomy_rewrite,
    );

    register_taxonomy( 'cpt-category', 'cpt', $taxonomy_args );


    $taxonomy_tags_args   = array(
      'hierarchical'      => false,
      'show_admin_column' => true,
      'rewrite'           => 'cpt-tag',
      'label'             => 'Tags',
      'singular_label'    => 'Tags',
    );

    register_taxonomy( 'cpt-tag', 'cpt', $taxonomy_tags_args );


  }
  add_action( 'init', 'cs_custom_post_type' );
}
