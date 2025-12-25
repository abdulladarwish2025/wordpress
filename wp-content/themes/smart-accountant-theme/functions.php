<?php
function smart_accountant_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts-manrope-noto', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Noto+Sans+Arabic:wght@100..900&display=swap', array(), null );

    // Enqueue Material Symbols
    wp_enqueue_style( 'material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );

    // Enqueue Tailwind CSS from CDN
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false );

    // Add Tailwind CSS config inline
    $tailwind_config = "
        tailwind.config = {
            darkMode: \"class\",
            theme: {
                extend: {
                    colors: {
                        \"primary\": \"#1855e2\",
                        \"primary-dark\": \"#103cb0\",
                        \"background-light\": \"#f8fafc\",
                        \"background-dark\": \"#0f172a\",
                        \"surface-light\": \"#ffffff\",
                        \"surface-dark\": \"#1e293b\",
                        \"text-main\": \"#0f172a\",
                        \"text-muted\": \"#64748b\",
                    },
                    fontFamily: {
                        \"display\": ['\"Noto Sans Arabic\"', \"Manrope\", \"sans-serif\"],
                        \"sans\": ['\"Noto Sans Arabic\"', \"Manrope\", \"sans-serif\"],
                    },
                    borderRadius: { \"DEFAULT\": \"0.25rem\", \"lg\": \"0.5rem\", \"xl\": \"0.75rem\", \"full\": \"9999px\" },
                },
            },
        }
    ";
    wp_add_inline_script( 'tailwindcss', $tailwind_config );

    // Enqueue main stylesheet
    wp_enqueue_style( 'smart-accountant-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'smart_accountant_scripts' );

// Add theme support for post thumbnails
add_theme_support( 'post-thumbnails' );

// Add theme support for title tag
add_theme_support( 'title-tag' );

// Register navigation menus
function smart_accountant_register_nav_menu() {
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'smart-accountant' ),
    ) );
}
add_action( 'after_setup_theme', 'smart_accountant_register_nav_menu' );

// Add custom classes to nav menu items
function smart_accountant_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'add_li_class')) {
    $atts['class'] = $args->add_li_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'smart_accountant_menu_link_class', 1, 3 );

/**
 * Register widget areas (sidebars)
 * 
 * Registers the primary sidebar widget area that appears on blog pages.
 * Widgets added to this area will appear in the right sidebar on desktop
 * and below the main content on mobile devices.
 * 
 * @since Smart Accountant Theme 1.0
 */
function smart_accountant_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'smart-accountant' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'smart_accountant_widgets_init' );
