<?php
/**
 * Twenty Sixteen functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */


if ( ! function_exists( 'foundation_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own foundation_setup() function to override in a child theme.
 *
 * @since 
 */
function foundation_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Palmetto 0.1
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 120,
		'flex-height' => true
		) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
// TODO: Need this for showing the first three images for blog posts I think
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'topbar-menu', __( 'Top Bar Menu','foundation' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // foundation_setup
add_action( 'after_setup_theme', 'foundation_setup' );


//Add Excerpts to Pages
add_action('init', 'foundation_add_page_excerpt_support');

function foundation_add_page_excerpt_support() {
	add_post_type_support( 'page', 'excerpt' );
}

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function foundation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'foundation_content_width', 1200 );
}
add_action( 'after_setup_theme', 'foundation_content_width', 0 );


/* NAVIGATION MENU FOR FOUNDATION */
function foundation_nav_menu() {
	wp_nav_menu(array(
		'container' => false,
		'menu' => __( 'Top Bar Menu', 'foundation' ),
		'menu_class' => 'dropdown menu',
		//'theme_location' => 'topbar-menu',
		'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
		//Recommend setting this to false, but if you need a fallback...
		'fallback_cb' => 'f6_topbar_menu_fallback',
		'walker' => new F6_TOPBAR_MENU_WALKER(),
	));
}


	/*
	 * Walker function to allow for top menu with Foundation 6
	 */
class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu
{   
	/*
	 * Add vertical menu class and submenu data attribute to sub menus
	 */
	 
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
	}
	
	// add main/sub classes to li's and links
 function start_el( &$output, $item, $depth, $args ) {
 

 
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
  
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    // passed classes
    
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
	
  
    // build html
    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    //$attributes .= ! empty( $item->xfn )        ? ' class="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
  
    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );
  
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}


}
 
//Optional fallback
function f6_topbar_menu_fallback($args)
{
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */
	 
	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);
	
	echo '<ul class="dropdown menu" data-dropdown-menu">'.$fallback.'</ul>';
}


/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
// TODO: Need to determine where/what I want here
function foundation_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'foundation' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'foundation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'foundation' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'foundation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'foundation' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'foundation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Content Bottom 3', 'foundation' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'foundation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );


	register_sidebar( array(
		'name'          => __( 'Sidebar - Page', 'foundation' ),
		'id'            => 'sidebar-page',
		'description'   => __( 'Appears on the sidebar for Page pages', 'foundation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar - Listing', 'foundation' ),
		'id'            => 'sidebar-listing',
		'description'   => __( 'Appears on the sidebar for Listing pages', 'foundation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'foundation_widgets_init' );


/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function foundation_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'foundation_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function foundation_scripts() {

	/* Add our fonts */
	// <link href='https://fonts.googleapis.com/css?family=Cantarell:400,400italic,700,700italic|Fjalla+One' rel='stylesheet' type='text/css'>
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Cantarell:400,400italic,700,700italic|Fjalla+One');
    wp_enqueue_style( 'googleFonts');

	// Add Font Awesome
	// https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css
    wp_register_style('fontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style( 'fontAwesome');
    
    // Add Custom Fonts
    wp_enqueue_style( 'fontAwesome-custom', get_template_directory_uri() . '/assets/custom-font-icons/custom-font-icons.css' );
    wp_enqueue_style( 'fontAwesome-custom');

	/* Add Foundation CSS */
	wp_enqueue_style( 'foundation-normalize', get_stylesheet_directory_uri() . '/foundation/css/normalize.css' );
	wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/foundation/css/foundation.css' );

	/* Add Foundation JS */
	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/vendor/foundation.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'foundation-modernizr-js', get_template_directory_uri() . '/foundation/js/vendor/modernizr.js', array( 'jquery' ), '1', true );
	/* Foundation Init JS */
	wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );

	/* Add our stylesheet */
	wp_enqueue_style( 'custom', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'foundation_scripts' );

$args = array(
	'flex-width'    => true,
	'width'         => 2400,
	'flex-height'    => true,
	'height'        => 1200,
);
add_theme_support( 'custom-header', $args );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function foundation_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'foundation_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function foundation_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



/* Foundation Pagination */
function foundation_pagination($arrows = true, $ends = true, $pages = 2)
{
    if (is_singular()) return;

    global $wp_query, $paged;
    $pagination = '';

    $max_page = $wp_query->max_num_pages;
    if ($max_page == 1) return;
    if (empty($paged)) $paged = 1;

    if ($arrows) $pagination .= foundation_pagination_link($paged - 1, 'arrow' . (($paged <= 1) ? ' unavailable disabled' : ''), '&laquo; Previous', 'Previous Page', (($paged <= 1) ? 'true' : ''));
    if ($ends && $paged > $pages + 1) $pagination .= foundation_pagination_link(1);
    if ($ends && $paged > $pages + 2) $pagination .= foundation_pagination_link(1, 'unavailable disabled', '&hellip;', 'ellipsis', 'true');
    for ($i = $paged - $pages; $i <= $paged + $pages; $i++) {
        if ($i > 0 && $i <= $max_page)
            $pagination .= foundation_pagination_link($i, ($i == $paged) ? 'current' : '');
    }
    if ($ends && $paged < $max_page - $pages - 1) $pagination .= foundation_pagination_link($max_page, 'unavailable disabled', '&hellip;', 'ellipsis','true');
    if ($ends && $paged < $max_page - $pages) $pagination .= foundation_pagination_link($max_page);

    if ($arrows) $pagination .= foundation_pagination_link($paged + 1, 'arrow' . (($paged >= $max_page) ? ' unavailable disabled' : ''), 'Next &raquo;', 'Next Page', (($paged >= $max_page) ? 'true' : ''));

    $pagination = '<ul class="pagination" role="navigation" aria-label="Pagination">' . $pagination . '</ul>';
    $pagination = '<nav class="pagination-centered">' . $pagination . '</nav>';

    echo $pagination;
}

function foundation_pagination_link($page, $class = '', $content = '', $title = '', $aria = '')
{
    $href = (strrpos($class, 'unavailable') === false && strrpos($class, 'current') === false) ? get_pagenum_link($page) : "#$id";

    $aria = empty($aria) ? $aria : " aria-disabled=\"$aria\"";
    $class = empty($class) ? $class : " class=\"$class\"";
    $content = !empty($content) ? $content : $page;
    $title = !empty($title) ? $title : 'Page ' . $page;
    
	if (strrpos($class, 'unavailable') === false)
    	return "<li $class $aria><a href=\"$href\" title=\"$title\">$content</a></li>\n";
    else 
    	return "<li $class $aria>$content</li>\n";
    
}


/* Advanced Custom Fields */