<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

require_once('bs4navwalker.php');
register_nav_menu('top', 'Top menu');

function heading_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('Headings', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('Heading', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('Headings', 'textdomain'),
    'name_admin_bar'      => __('Headings', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les headings', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau heading', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau heading', 'textdomain'),
    'new_item'            => __('Heading', 'textdomain' ),
    'edit_item'           => __('Editer heading', 'textdomain'),
    'update_item'         => __('Mettre à jour heading', 'textdomain'),
    'view_item'           => __('Voir heading', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun heading pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('headings', 'headings', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('headings', 'textdomain'),
    'description'         => __('headings', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'headings',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('headings', $args);
}

add_action('init', 'heading_cpt');

function about_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('abouts', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('about', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('abouts', 'textdomain'),
    'name_admin_bar'      => __('abouts', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les abouts', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau about', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau about', 'textdomain'),
    'new_item'            => __('Heading', 'textdomain' ),
    'edit_item'           => __('Editer about', 'textdomain'),
    'update_item'         => __('Mettre à jour about', 'textdomain'),
    'view_item'           => __('Voir about', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun about pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('abouts', 'abouts', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('abouts', 'textdomain'),
    'description'         => __('abouts', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'abouts',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('abouts', $args);
}

add_action('init', 'about_cpt');

function projects_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('projects', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('project', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('projects', 'textdomain'),
    'name_admin_bar'      => __('projects', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les projects', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau project', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau project', 'textdomain'),
    'new_item'            => __('project', 'textdomain' ),
    'edit_item'           => __('Editer project', 'textdomain'),
    'update_item'         => __('Mettre à jour project', 'textdomain'),
    'view_item'           => __('Voir project', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun project pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('projects', 'projects', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('projects', 'textdomain'),
    'description'         => __('projects', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'projects',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('projects', $args);
}

add_action('init', 'projects_cpt');


function footer_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('footers', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('footer', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('footers', 'textdomain'),
    'name_admin_bar'      => __('footers', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les footers', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau footer', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau footer', 'textdomain'),
    'new_item'            => __('footer', 'textdomain' ),
    'edit_item'           => __('Editer footer', 'textdomain'),
    'update_item'         => __('Mettre à jour footer', 'textdomain'),
    'view_item'           => __('Voir footer', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun footer pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('footers', 'footers', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('footers', 'textdomain'),
    'description'         => __('footers', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'footers',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('footers', $args);
}

add_action('init', 'footer_cpt');


function project_heading_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('project_headings', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('project_heading', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('project_headings', 'textdomain'),
    'name_admin_bar'      => __('project_headings', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les project_headings', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau project_heading', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau project_heading', 'textdomain'),
    'new_item'            => __('project_heading', 'textdomain' ),
    'edit_item'           => __('Editer project_heading', 'textdomain'),
    'update_item'         => __('Mettre à jour project_heading', 'textdomain'),
    'view_item'           => __('Voir project_heading', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun project_heading pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('project_headings', 'project_headings', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('project_headings', 'textdomain'),
    'description'         => __('project_headings', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'project_headings',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('project_headings', $args);
}

add_action('init', 'project_heading_cpt');



remove_filter('the_content','wpautop');


?>
