<?php
/*Custom Portfolio Post type start*/
function custom_post_type() {
$supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
);
$labels = array(
  'name' => _x('Portfolio', 'plural'),
  'singular_name' => _x('Portfolio', 'singular'),
  'menu_name' => _x('Portfolio', 'admin menu'),
  'name_admin_bar' => _x('Portfolio', 'admin bar'),
  'add_new' => _x('Add New Project', 'add new'),
  'add_new_item' => __('Add New Project'),
  'new_item' => __('New Project'),
  'edit_item' => __('Edit Project'),
  'view_item' => __('View Project'),
  'all_items' => __('All Projects'),
  'search_items' => __('Search Projects'),
  'not_found' => __('No Projects found.'),
);
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'portfolio'),
  'has_archive' => true,
  'hierarchical' => false,
  'menu_icon' => 'dashicons-admin-tools',
);
  register_post_type('portfolio', $args);
}
  add_action('init', 'custom_post_type');

  /*Custom Floor Plans Post type start*/
  function custom_floor_plan_post_type() {
  $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
  );
  $labels = array(
    'name' => _x('Floor Plans', 'plural'),
    'singular_name' => _x('Floor Plan', 'singular'),
    'menu_name' => _x('Floor Plans', 'admin menu'),
    'name_admin_bar' => _x('Floor Plans', 'admin bar'),
    'add_new' => _x('Add New Floor Plan', 'add new'),
    'add_new_item' => __('Add New Floor Plan'),
    'new_item' => __('New Floor Plan'),
    'edit_item' => __('Edit Floor Plans'),
    'view_item' => __('View Floor Plans'),
    'all_items' => __('All Floor Plans'),
    'search_items' => __('Search Floor Plans'),
    'not_found' => __('No Floor Plans found.'),
  );
  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'floor-plans'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-admin-tools',
  );
    register_post_type('Floor Plans', $args);
  }
    add_action('init', 'custom_floor_plan_post_type');
?>
