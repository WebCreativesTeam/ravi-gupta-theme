<?php
/**
 * Register a custom post type called "eBook".
 *
 * @see get_post_type_labels() for label keys.
 */
function ravig_ebook_posttype() {
	$labels = array(
		'name'                  => _x( 'eBooks', 'Post type general name', 'ravig' ),
		'singular_name'         => _x( 'eBook', 'Post type singular name', 'ravig' ),
		'menu_name'             => _x( 'eBooks', 'Admin Menu text', 'ravig' ),
		'name_admin_bar'        => _x( 'eBook', 'Add New on Toolbar', 'ravig' ),
		'add_new'               => __( 'Add New', 'ravig' ),
		'add_new_item'          => __( 'Add New eBook', 'ravig' ),
		'new_item'              => __( 'New eBook', 'ravig' ),
		'edit_item'             => __( 'Edit eBook', 'ravig' ),
		'view_item'             => __( 'View eBook', 'ravig' ),
		'all_items'             => __( 'All eBooks', 'ravig' ),
		'search_items'          => __( 'Search eBooks', 'ravig' ),
		'parent_item_colon'     => __( 'Parent eBooks:', 'ravig' ),
		'not_found'             => __( 'No eBooks found.', 'ravig' ),
		'not_found_in_trash'    => __( 'No eBooks found in Trash.', 'ravig' ),
		'featured_image'        => _x( 'eBook Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ravig' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ravig' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ravig' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ravig' ),
		'archives'              => _x( 'eBook archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ravig' ),
		'insert_into_item'      => _x( 'Insert into eBook', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ravig' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this eBook', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ravig' ),
		'filter_items_list'     => _x( 'Filter eBooks list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ravig' ),
		'items_list_navigation' => _x( 'eBooks list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ravig' ),
		'items_list'            => _x( 'eBooks list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ravig' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'menu_icon'          => 'dashicons-book',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'eBook' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'ebook', $args );
}

add_action( 'init', 'ravig_ebook_posttype' );

/**
 * Register a custom post type called "course".
 *
 * @see get_post_type_labels() for label keys.
 */
function ravig_course_posttype() {
	$labels = array(
		'name'                  => _x( 'Courses', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Course', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Courses', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Course', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Course', 'textdomain' ),
		'new_item'              => __( 'New Course', 'textdomain' ),
		'edit_item'             => __( 'Edit Course', 'textdomain' ),
		'view_item'             => __( 'View Course', 'textdomain' ),
		'all_items'             => __( 'All Courses', 'textdomain' ),
		'search_items'          => __( 'Search Courses', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Courses:', 'textdomain' ),
		'not_found'             => __( 'No courses found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No courses found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Course Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Course archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into course', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this course', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter courses list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Courses list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Courses list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon'          => 'dashicons-awards',
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'course' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'course', $args );
}

add_action( 'init', 'ravig_course_posttype' );


/**
 * Register a custom post type called "deal".
 *
 * @see get_post_type_labels() for label keys.
 */
function ravig_deal_posttype() {
	$labels = array(
		'name'                  => _x( 'Deals', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Deal', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Deals', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Deal', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Deal', 'textdomain' ),
		'new_item'              => __( 'New Deal', 'textdomain' ),
		'edit_item'             => __( 'Edit Deal', 'textdomain' ),
		'view_item'             => __( 'View Deal', 'textdomain' ),
		'all_items'             => __( 'All Deals', 'textdomain' ),
		'search_items'          => __( 'Search Deals', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Deals:', 'textdomain' ),
		'not_found'             => __( 'No deals found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No deals found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Deal Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Deal archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into deal', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this deal', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter deals list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Deals list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Deals list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'deal' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'deal', $args );
}

add_action( 'init', 'ravig_deal_posttype' );


/**
 * Register a custom post type called "tool".
 *
 * @see get_post_type_labels() for label keys.
 */
function ravig_tool_posttype() {
	$labels = array(
		'name'                  => _x( 'Tools', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Tool', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Tools', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Tool', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Tool', 'textdomain' ),
		'new_item'              => __( 'New Tool', 'textdomain' ),
		'edit_item'             => __( 'Edit Tool', 'textdomain' ),
		'view_item'             => __( 'View Tool', 'textdomain' ),
		'all_items'             => __( 'All Tools', 'textdomain' ),
		'search_items'          => __( 'Search Tools', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Tools:', 'textdomain' ),
		'not_found'             => __( 'No tools found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No tools found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Tool Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Tool archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into tool', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this tool', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter tools list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Tools list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Tools list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon'          => 'dashicons-image-filter',
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tool' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'tool', $args );
}

add_action( 'init', 'ravig_tool_posttype' );