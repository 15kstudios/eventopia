<?php
add_action('after_setup_theme', 'uncode_language_setup');
function uncode_language_setup()
{
	load_child_theme_textdomain('uncode', get_stylesheet_directory() . '/languages');
}

function theme_enqueue_styles()
{
	$production_mode = ot_get_option('_uncode_production');
	$resources_version = ($production_mode === 'on') ? null : rand();
	if ( function_exists('get_rocket_option') && ( get_rocket_option( 'remove_query_strings' ) || get_rocket_option( 'minify_css' ) || get_rocket_option( 'minify_js' ) ) ) {
		$resources_version = null;
	}
	$parent_style = 'uncode-style';
	$child_style = array('uncode-style');
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/library/css/style.css', array(), $resources_version);
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', $child_style, $resources_version);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 100);

// 15k

function add_query_vars($qVars) {
    $qVars[] = "getvars"; // Represents the name of the query variable
    return $qVars;
}
add_filter('query_vars', 'add_query_vars');

function populate_cf7_getvars_field($tag, $unused) {
    // Check if the field is the 'your-question' field
    if ('your-question' == $tag['name']) {
        // Retrieve the 'getvars' query parameter from the URL
        $getvars_value = isset($_GET['getvars']) ? sanitize_text_field($_GET['getvars']) : '';

        // Set the default value to the 'getvars' query parameter if it exists
        if ($getvars_value) {
            // Pre-populate the field with the value from the query parameter
            $tag['values'] = array($getvars_value);  // Set the value to the 'getvars' query parameter
        }
    }
    return $tag;
}
add_filter('wpcf7_form_tag', 'populate_cf7_getvars_field', 10, 2);
