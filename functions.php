<?php
//require_once ('acf/acf-include.php');

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

// init custom posts
//require_once('inc/custom-posts.php');


add_action('after_setup_theme', 'child_theme_setup');

function child_theme_setup() {


    //init styles
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

    function theme_enqueue_styles() {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

        wp_register_style('googlefonts', get_stylesheet_directory_uri() . '/css/fonts.css', 'style', '1.0', 'all');
        wp_enqueue_style('googlefonts');
        wp_register_style('gray', get_stylesheet_directory_uri() . '/css/gray.min.css', array(), '1.0', 'all');
        wp_enqueue_style('gray');

        // wp_register_style('child-style', get_stylesheet_directory_uri() . '/css/custom-style.min.css', array('parent-style', 'googlefonts'), '1.0', 'all');
        // wp_enqueue_style('child-style'); // Enqueue it!
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/custom-style.min.css', array('parent-style', 'googlefonts'), _S_VERSION);
    }

    //init scripts
    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

    function theme_enqueue_scripts() {

        wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', array(), '2.8.3',false); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!


        wp_register_script('gray', get_stylesheet_directory_uri() . '/js/jquery.gray.min.js', array(), '1.2', true); // Custom Script
        wp_enqueue_script('gray'); // Enqueue it!

        wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.2', true); // Custom Script
        wp_enqueue_script('custom'); // Enqueue it!

        // Cookie Bar
        wp_register_script('cookie-bar', get_stylesheet_directory_uri() . '/cookie-bar/cookiebar-latest.min.js?theme=white&top=1&tracking=1&thirdparty=1&refreshPage=1&showNoConsent=1&hideDetailsBtn=1&remember=30&privacyPage=https%3A%2F%2Fwww.unigerman.de%2Fde%2Fdatenschutz%2F', array('jquery'), false, true);
        wp_enqueue_script('cookie-bar');

    }

    // Create Menus.
    register_nav_menus(array(
        'footer-menu' => esc_html__('Footer Menu', 'my-givingpress-lite'),
    ));

    /** Function givingpress_lite_widgets_init */
    function givingpress_lite_child_widgets_init() {
        register_sidebar(array(
            'name' => esc_html__('Choose Language', 'my-givingpress-lite'),
            'id' => 'language',
            'before_widget' => '<span id="%1$s" class="widget %2$s">',
            'after_widget' => '</span>',
        ));
    }

    add_action('widgets_init', 'givingpress_lite_child_widgets_init');


    //add the current browserclass in body
    function mv_browser_body_class($classes) {
        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
        if ($is_lynx)
            $classes[] = 'lynx';
        elseif ($is_gecko)
            $classes[] = 'gecko';
        elseif ($is_opera)
            $classes[] = 'opera';
        elseif ($is_NS4)
            $classes[] = 'ns4';
        elseif ($is_safari)
            $classes[] = 'safari';
        elseif ($is_chrome)
            $classes[] = 'chrome';
        elseif ($is_IE) {
            $classes[] = 'ie';
            if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
                $classes[] = 'ie' . $browser_version[1];
        } else
            $classes[] = 'unknown';
        if ($is_iphone)
            $classes[] = 'iphone';
        if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
            $classes[] = 'osx';
        } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
            $classes[] = 'linux';
        } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
            $classes[] = 'windows';
        }
        return $classes;
    }

    add_filter('body_class', 'mv_browser_body_class');
}
?>
