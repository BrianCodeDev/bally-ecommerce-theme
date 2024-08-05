<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}
function enqueue_custom_styles_and_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null);

    // Enqueue Custom CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array('bootstrap-css'), null);
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/31778849f3.js', array(), null, true);

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
function theme_setup() {
    register_nav_menus(array(
        'primary-left' => __('Primary Left Menu', 'textdomain'),
        'primary-right' => __('Primary Right Menu', 'textdomain'),
        'primary-mobile' => __('Primary Mobile Menu', 'textdomain'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

function theme_setuplogos() {
    // Other theme supports...
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width'  => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_setuplogos');
function theme_customizer_settings($wp_customize) {
    // Add logo width setting
    $wp_customize->add_setting('logo_width', array(
        'default' => 100,
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));

    // Add logo width control
    $wp_customize->add_control('logo_width', array(
        'label' => __('Logo Width', 'theme_textdomain'),
        'section' => 'title_tagline',
        'settings' => 'logo_width',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 50,
            'max' => 300,
            'step' => 1,
        ),
    ));
}
add_action('customize_register', 'theme_customizer_settings');
function theme_register_menus() {
    register_nav_menus(array(
        'primary-left' => __('Primary Left Menu', 'theme_textdomain'),
        'primary-right' => __('Primary Right Menu', 'theme_textdomain'),
        'primary-mobile' => __('Primary Mobile Menu', 'theme_textdomain'),
    ));
}
add_action('init', 'theme_register_menus');
function my_custom_theme_setup() {
    register_nav_menus(
        array(
            'bally-menu' => __('bally-menu', 'my_custom_theme_setup'),
        )
    );
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_customize_register($wp_customize) {
    // Navbar link margin settings
    $wp_customize->add_section('my_custom_theme_navbar_link_margin_section', array(
        'title'    => __('Navbar Link Margins', 'my_custom_theme'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('my_custom_theme_navbar_link_margin', array(
        'default'   => '0px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('my_custom_theme_navbar_link_margin_control', array(
        'label'    => __('Navbar Link Margin', 'my_custom_theme'),
        'section'  => 'my_custom_theme_navbar_link_margin_section',
        'settings' => 'my_custom_theme_navbar_link_margin',
        'type'     => 'text',
    ));

    // Navbar link padding settings
    $wp_customize->add_section('my_custom_theme_navbar_link_padding_section', array(
        'title'    => __('Navbar Link Paddings', 'my_custom_theme'),
        'priority' => 33,
    ));

    $wp_customize->add_setting('my_custom_theme_navbar_link_padding', array(
        'default'   => '0px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('my_custom_theme_navbar_link_padding_control', array(
        'label'    => __('Navbar Link Padding', 'my_custom_theme'),
        'section'  => 'my_custom_theme_navbar_link_padding_section',
        'settings' => 'my_custom_theme_navbar_link_padding',
        'type'     => 'text',
    ));

    // Space between navbar links settings
    $wp_customize->add_section('my_custom_theme_navbar_link_spacing_section', array(
        'title'    => __('Navbar Link Spacing', 'my_custom_theme'),
        'priority' => 34,
    ));

    $wp_customize->add_setting('my_custom_theme_navbar_link_spacing', array(
        'default'   => '15px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('my_custom_theme_navbar_link_spacing_control', array(
        'label'    => __('Space Between Navbar Links', 'my_custom_theme'),
        'section'  => 'my_custom_theme_navbar_link_spacing_section',
        'settings' => 'my_custom_theme_navbar_link_spacing',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'my_custom_theme_customize_register');

function my_custom_theme_customize_register_right($wp_customize) {
    // Space between navbar links settings
    $wp_customize->add_section('my_custom_theme_navbar_link_spacing_section', array(
        'title'    => __('Navbar Link Spacing', 'my_custom_theme'),
        'priority' => 34,
    ));

    $wp_customize->add_setting('my_custom_theme_navbar_link_spacing', array(
        'default'   => '15px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('my_custom_theme_navbar_link_spacing_control', array(
        'label'    => __('Space Between Navbar Links', 'my_custom_theme'),
        'section'  => 'my_custom_theme_navbar_link_spacing_section',
        'settings' => 'my_custom_theme_navbar_link_spacing',
        'type'     => 'text',
    ));

    // Space to the right of navbar links
    $wp_customize->add_setting('my_custom_theme_navbar_link_right_spacing', array(
        'default'   => '15px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('my_custom_theme_navbar_link_right_spacing_control', array(
        'label'    => __('Space to the Right of Navbar Links', 'my_custom_theme'),
        'section'  => 'my_custom_theme_navbar_link_spacing_section',
        'settings' => 'my_custom_theme_navbar_link_right_spacing',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'my_custom_theme_customize_register_right');
