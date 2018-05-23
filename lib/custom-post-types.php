<?php
/*
===============================================================
	Projects Custom Post
===============================================================
*/
if ( !function_exists( 'projects' ) ) {

	function projects () {

		$singular = __( 'Project' );
		$plural = __( 'Projects' );
		$slug = 'projects';

		$labels = array(
			'name' => __( ucfirst( $plural ) ),
			'singular_name' => __( ucfirst( $singular ) ),
			'menu_name' => __( ucfirst( $plural ) ),
			'name_admin_bar' => __( ucfirst( $plural ) ),
			'parent_item_colon' => sprintf( __( 'Parent %s', 'sage'  ), $singular ),
			'all_items' => sprintf( __( 'All %s', 'sage'  ), $plural ),
			'add_new_item' => sprintf( __( 'New %s', 'sage'  ), $singular ),
			'add_new' => sprintf( __( 'New %s', 'sage'  ), $singular ),
			'new_item' => sprintf( __( 'New %s', 'sage'  ), $singular ),
			'edit_item' => sprintf( __( 'Change %s', 'sage'  ), $singular ),
			'update_item' => sprintf( __( '%s to update', 'sage'  ), ucfirst( $singular ) ),
			'view_item' => sprintf( __( 'View %s', 'sage'  ), $singular ),
			'search_items' => sprintf( __( 'Search %s', 'sage'  ), $singular ),
			'not_found' => __( 'Not found', 'sage' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'sage' ),
		);
		$rewrite = array(
			'slug' => strtolower( $slug ),
			'with_front' => false,
			'pages' => true,
			'feeds' => true
		);
		$args = array(
			'label' => __( ucfirst( $plural ) ),
			'description' => sprintf( __( '%s description', 'sage'  ), $singular ),
			'labels' => $labels,
			'supports' => array('title', 'editor', 'thumbnail'),
			'taxonomies' => array(),
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 21,
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'rewrite' => $rewrite,
			'capability_type' => 'page',
		);
		register_post_type( $slug, $args );
	}

	add_action('init', __NAMESPACE__ . '\\projects', 0);
}



/*
===============================================================
	Testimonials Custom Post
===============================================================
*/
if ( !function_exists( 'testimonials' ) ) {

	function testimonials () {

		$singular = __( 'Testimonial' );
		$plural = __( 'Testimonials' );
		$slug = 'testimonials';

		$labels = array(
			'name' => __( ucfirst( $plural ) ),
			'singular_name' => __( ucfirst( $singular ) ),
			'menu_name' => __( ucfirst( $plural ) ),
			'name_admin_bar' => __( ucfirst( $plural ) ),
			'parent_item_colon' => sprintf( __( 'Parent %s', 'sage'  ), $singular ),
			'all_items' => sprintf( __( 'All %s', 'sage'  ), $plural ),
			'add_new_item' => sprintf( __( 'New %s', 'sage'  ), $singular ),
			'add_new' => sprintf( __( 'New %s', 'sage'  ), $singular ),
			'new_item' => sprintf( __( 'New %s', 'sage'  ), $singular ),
			'edit_item' => sprintf( __( 'Change %s', 'sage'  ), $singular ),
			'update_item' => sprintf( __( '%s to update', 'sage'  ), ucfirst( $singular ) ),
			'view_item' => sprintf( __( 'View %s', 'sage'  ), $singular ),
			'search_items' => sprintf( __( 'Search %s', 'sage'  ), $singular ),
			'not_found' => __( 'Not found', 'sage' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'sage' ),
		);
		$rewrite = array(
			'slug' => strtolower( $slug ),
			'with_front' => false,
			'pages' => true,
			'feeds' => true
		);
		$args = array(
			'label' => __( ucfirst( $plural ) ),
			'description' => sprintf( __( '%s description', 'sage'  ), $singular ),
			'labels' => $labels,
			'supports' => array('title', 'editor'),
			'taxonomies' => array(),
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 21,
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'rewrite' => $rewrite,
			'capability_type' => 'page',
		);
		register_post_type( $slug, $args );
	}

	add_action('init', __NAMESPACE__ . '\\testimonials', 0);
}


