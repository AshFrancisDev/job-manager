<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.2
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       Job Manager
 * Plugin URI:        http://example.com/job-manager-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ash Francis @ Yell.com
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       job-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Register Custom Post Type
function ju_job() {

	$labels = array(
		'name'                  => _x( 'JUJobs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'JUJob', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'JUJobs', 'text_domain' ),
		'name_admin_bar'        => __( 'JUJob', 'text_domain' ),
		'archives'              => __( 'JUJob Archives', 'text_domain' ),
		'attributes'            => __( 'JUJob Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Job:', 'text_domain' ),
		'all_items'             => __( 'All Jobs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Job', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Job', 'text_domain' ),
		'edit_item'             => __( 'Edit Job', 'text_domain' ),
		'update_item'           => __( 'Update Job', 'text_domain' ),
		'view_item'             => __( 'View Job', 'text_domain' ),
		'view_items'            => __( 'View Jobs', 'text_domain' ),
		'search_items'          => __( 'Search Job', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Job', 'text_domain' ),
		'items_list'            => __( 'Jobs list', 'text_domain' ),
		'items_list_navigation' => __( 'Jobs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Jobs list', 'text_domain' ),
	);
	$rewrite = array (
		'slug'					=> 'jobs',
        'with_front'			=> true,
        'pages'					=> true,
        'feeds'					=> true,
	);
	$args = array(
		'label'                 => __( 'Job', 'text_domain' ),
		'description'           => __( 'Jobs', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'rewrite'       		=> $rewrite,
	);
	register_post_type( 'ju_job', $args );

}
add_action( 'init', 'ju_job', 0 );

// Register Custom Taxonomy
function job_industries() {

	$labels = array(
		'name'                       => _x( 'Job Industries', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Job Industry', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Job Industries', 'text_domain' ),
		'all_items'                  => __( 'All Job Industries', 'text_domain' ),
		'parent_item'                => __( 'Parent Job Industry', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Job Industry:', 'text_domain' ),
		'new_item_name'              => __( 'New Job Industry', 'text_domain' ),
		'add_new_item'               => __( 'Add New Job Industry', 'text_domain' ),
		'edit_item'                  => __( 'Edit Job Industry', 'text_domain' ),
		'update_item'                => __( 'Update Job Industry', 'text_domain' ),
		'view_item'                  => __( 'View Job Industry', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ju_job_industry', array( 'ju_job' ), $args );

}
add_action( 'init', 'job_industries', 0 );

// Register Custom Taxonomy
function job_locations() {

	$labels = array(
		'name'                       => _x( 'Job Locations', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Job Location', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Job Locations', 'text_domain' ),
		'all_items'                  => __( 'All Job Locations', 'text_domain' ),
		'parent_item'                => __( 'Parent Job Location', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Job Location:', 'text_domain' ),
		'new_item_name'              => __( 'New Job Location', 'text_domain' ),
		'add_new_item'               => __( 'Add New Job Location', 'text_domain' ),
		'edit_item'                  => __( 'Edit Job Location', 'text_domain' ),
		'update_item'                => __( 'Update Job Location', 'text_domain' ),
		'view_item'                  => __( 'View Job Location', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ju_job_locations', array( 'ju_job' ), $args );

}
add_action( 'init', 'job_locations', 0 );

// Register Custom Taxonomy
function job_types() {

	$labels = array(
		'name'                       => _x( 'Job Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Job Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Job Types', 'text_domain' ),
		'all_items'                  => __( 'All Job Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Job Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Job Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Job Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Job Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Job Type', 'text_domain' ),
		'update_item'                => __( 'Update Job Type', 'text_domain' ),
		'view_item'                  => __( 'View Job Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ju_job_types', array( 'ju_job' ), $args );

}
add_action( 'init', 'job_types', 0 );

// Register Custom Taxonomy
function job_skills() {

	$labels = array(
		'name'                       => _x( 'Job Skills', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Job Skill', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Job Skills', 'text_domain' ),
		'all_items'                  => __( 'All Job Skills', 'text_domain' ),
		'parent_item'                => __( 'Parent Job Skill', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Job Skill:', 'text_domain' ),
		'new_item_name'              => __( 'New Job Skill', 'text_domain' ),
		'add_new_item'               => __( 'Add New Job Skill', 'text_domain' ),
		'edit_item'                  => __( 'Edit Job Skill', 'text_domain' ),
		'update_item'                => __( 'Update Job Skill', 'text_domain' ),
		'view_item'                  => __( 'View Job Skill', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ju_job_skills', array( 'ju_job' ), $args );

}
add_action( 'init', 'job_skills', 0 );

// Register Custom Taxonomy
function job_status() {

	$labels = array(
		'name'                       => _x( 'Job Statuses', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Job Status', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Job Statuses', 'text_domain' ),
		'all_items'                  => __( 'All Job Statuses', 'text_domain' ),
		'parent_item'                => __( 'Parent Job Status', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Job Status:', 'text_domain' ),
		'new_item_name'              => __( 'New Job Status', 'text_domain' ),
		'add_new_item'               => __( 'Add New Job Status', 'text_domain' ),
		'edit_item'                  => __( 'Edit Job Status', 'text_domain' ),
		'update_item'                => __( 'Update Job Status', 'text_domain' ),
		'view_item'                  => __( 'View Job Status', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ju_job_status', array( 'ju_job' ), $args );

}
add_action( 'init', 'job_status', 0 );

// Register Featured Taxonomy
function job_highlight() {

	$labels = array(
		'name'                       => _x( 'Job Highlights', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Job Highlight', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Job Highlights', 'text_domain' ),
		'all_items'                  => __( 'All Job Highlights', 'text_domain' ),
		'parent_item'                => __( 'Parent Job Highlight', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Job Highlight:', 'text_domain' ),
		'new_item_name'              => __( 'New Job Highlight', 'text_domain' ),
		'add_new_item'               => __( 'Add New Job Highlight', 'text_domain' ),
		'edit_item'                  => __( 'Edit Job Highlight', 'text_domain' ),
		'update_item'                => __( 'Update Job Highlight', 'text_domain' ),
		'view_item'                  => __( 'View Job Status', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ju_job_highlight', array( 'ju_job' ), $args );

}
add_action( 'init', 'job_highlight', 0 );

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5e396f3e766a3',
		'title' => 'Job Information',
		'fields' => array(
			array(
				'key' => 'field_5e396f523141e',
				'label' => 'Job Bullet Points',
				'name' => 'job_bullet_points',
				'type' => 'textarea',
				'instructions' => 'Enter each bullet point on a new line',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_5e396f963141f',
				'label' => 'Job Reference',
				'name' => 'job_reference',
				'type' => 'text',
				'instructions' => 'Unique to each job.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e396fd431420',
				'label' => 'Salary',
				'name' => 'salary',
				'type' => 'text',
				'instructions' => 'Salary display field to show on front end.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '49',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ju_job',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;

// ----

/* ========== START REGISTER CUSTOM POST TYPE TEMPLATE ========== */
if( !function_exists('get_ju_job_template') ):
 function get_ju_job_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'ju_job'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/ju_job_template.php';
    }//end if ju_job
    return $single_template;
}//end get_ju_job_template function
endif;
 
add_filter( 'single_template', 'get_ju_job_template' ) ;

function get_ju_job_archive_template($archive_template) {
	global $post;

	if ($post->post_type == 'ju_job') {
		$archive_template = dirname( __FILE__ ) . '/templates/archive-ju_job.php';
	}
	return $archive_template;
}

add_filter( "archive_template", "get_ju_job_archive_template" );

/* ========== END REGISTER CUSTOM POST TYPE TEMPLATE ========== */

add_filter( 'excerpt_length', 'change_excerpt_length' );
function change_excerpt_length( $length ) {
if( 'ju_job' == get_post_type() ) {
	return 20; 
}
}



/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-job-manager-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-job-manager-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-job-manager-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-job-manager-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-job-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
run_plugin_name();