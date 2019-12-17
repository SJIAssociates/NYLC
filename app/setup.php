<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;
//use Roots_Vcard_Widget;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_style( 'AdobeBenton' ,'https://use.typekit.net/nwk0uyd.css',false, null);

    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    if( is_post_type_archive('landmark') or is_singular('landmark') ) {
      $api = get_field('google_maps_api', 'options');

      $googleMapLink = 'https://maps.googleapis.com/maps/api/js?key=' . $api;

      wp_enqueue_script( 'google-api', $googleMapLink , null, null, true); // Add in your key
    }

    if( is_post_type_archive('landmark')) {
      wp_enqueue_script('sage/explorer.js', asset_path('scripts/explorer.js'), ['jquery'], '1.0.0', true);
    }
    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'footer_navigation'  => __('Footer Navigation', 'sage'),
        'trustee_navigation' => __('Trustee Navigation','sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });



});



class Roots_Vcard_Widget extends \WP_Widget {
  private $fields = array(
    'title'          => 'Title (optional)',
    'street_address' => 'Street Address',
    'locality'       => 'City/Locality',
    'region'         => 'State/Region',
    'postal_code'    => 'Zipcode/Postal Code',
    'tel'            => 'Telephone',
    'email'          => 'Email'
  );

  function __construct() {
    $widget_ops = array('classname' => 'widget_roots_vcard', 'description' => __('Use this widget to add a vCard', 'roots'));

    parent::__construct('widget_roots_vcard', __('Roots: vCard', 'roots'), $widget_ops);
    $this->alt_option_name = 'widget_roots_vcard';

    add_action('save_post', array(&$this, 'flush_widget_cache'));
    add_action('deleted_post', array(&$this, 'flush_widget_cache'));
    add_action('switch_theme', array(&$this, 'flush_widget_cache'));
  }

  function widget($args, $instance) {
    $cache = wp_cache_get('widget_roots_vcard', 'widget');

    if (!is_array($cache)) {
      $cache = array();
    }

    if (!isset($args['widget_id'])) {
      $args['widget_id'] = null;
    }

    if (isset($cache[$args['widget_id']])) {
      echo $cache[$args['widget_id']];
      return;
    }

    ob_start();
    extract($args, EXTR_SKIP);

    $title = apply_filters('widget_title', empty($instance['title']) ? __('vCard', 'roots') : $instance['title'], $instance, $this->id_base);

    foreach($this->fields as $name => $label) {
      if (!isset($instance[$name])) { $instance[$name] = ''; }
    }

    echo $before_widget;

    if ($title) {
      //echo $before_title, $title, $after_title;
    }
  ?>
    <p class="vcard">
      <a class="fn org url" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a><br>
      <span class="adr">
        <span class="street-address"><?php echo $instance['street_address']; ?></span><br>
        <span class="locality"><?php echo $instance['locality']; ?></span>,
        <span class="region"><?php echo $instance['region']; ?></span>
        <span class="postal-code"><?php echo $instance['postal_code']; ?></span><br>
      </span>
      <br>
      <span class="email "><a  href="mailto:<?php echo $instance['email']; ?>" class='text-black'/>Email: <?php echo $instance['email']; ?></a></span><br>
      <span class="tel">Phone: <span class="value"><?php echo $instance['tel']; ?></span></span>

    </p>
          <br>
  <?php
    echo $after_widget;

    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('widget_roots_vcard', $cache, 'widget');
  }

  function update($new_instance, $old_instance) {
    $instance = array_map('strip_tags', $new_instance);

    $this->flush_widget_cache();

    $alloptions = wp_cache_get('alloptions', 'options');

    if (isset($alloptions['widget_roots_vcard'])) {
      delete_option('widget_roots_vcard');
    }

    return $instance;
  }

  function flush_widget_cache() {
    wp_cache_delete('widget_roots_vcard', 'widget');
  }

  function form($instance) {
    foreach($this->fields as $name => $label) {
      ${$name} = isset($instance[$name]) ? esc_attr($instance[$name]) : '';
    ?>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id($name)); ?>"><?php _e("{$label}:", 'roots'); ?></label>
      <input class="widefat" id="<?php echo esc_attr($this->get_field_id($name)); ?>" name="<?php echo esc_attr($this->get_field_name($name)); ?>" type="text" value="<?php echo ${$name}; ?>">
    </p>
    <?php
    }
  }
}
// -------------------------------------------------------------
// VCard
// -------------------------------------------------------------
function register_Roots_Vcard_Widget() {
	register_widget( __NAMESPACE__ . '\\Roots_Vcard_Widget' );
}
add_action('widgets_init', __NAMESPACE__ . '\\register_Roots_Vcard_Widget');


// -------------------------------------------------------------
// News Excerpt
// -------------------------------------------------------------
function news_excerpt( $length ) {
    return 20;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\news_excerpt', 999 );

// -------------------------------------------------------------
// Options Page
// -------------------------------------------------------------
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
// -------------------------------------------------------------
// Remove Comments
// -------------------------------------------------------------
function custom_menu_page_removing() {
  remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', __NAMESPACE__ .'\\custom_menu_page_removing' );
// -------------------------------------------------------------
// Google Map
// -------------------------------------------------------------
function my_acf_init() {

  $api = get_field('google_maps_api', 'options');

	acf_update_setting('google_api_key', $api);
}

add_action('acf/init', __NAMESPACE__ .'\\my_acf_init');


function admin_styles() {
	echo '<style type="text/css">
        #adminmenu li.wp-menu-separator {margin: 0; background: #444;}
        .column-featured_image img{ height: 50px;}
        .acf-table .acf-row:nth-of-type(odd) .acf-fields{background: #FAFAFA;}
        .acf-flexible-content .layout .acf-fc-layout-handle {background: #DDD; font-size: 18px;}
    </style>';
}
add_action('admin_head', __NAMESPACE__ .'\\admin_styles');
// -------------------------------------------------------------
// Homepage Thumbnail
// -------------------------------------------------------------
function news_thumbnail() {
  add_image_size( 'news_thumb', 600, 400, array( 'center', 'cetner' ) );
}
add_action('init', __NAMESPACE__ .'\\news_thumbnail');

// -------------------------------------------------------------
// Fix Titles for Archives
// -------------------------------------------------------------
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});
// -------------------------------------------------------------
// Trustee Portal Automatically Logs out
// -------------------------------------------------------------
function custom_password_cookie_expiry( $expires ) {
    return time() + 3600;  // 3600 seconds is 1 hour. (60 Minutes * 60 seconds)
}
add_filter( 'post_password_expires', __NAMESPACE__  .'\\custom_password_cookie_expiry' );


// -------------------------------------------------------------
// Trustee Portal Password Error
// -------------------------------------------------------------
add_filter( 'the_password_form', __NAMESPACE__  .'\\wpse_71284_custom_post_password_msg' );

/**
 * Add a message to the password form.
 *
 * @wp-hook the_password_form
 * @param   string $form
 * @return  string
 */
function wpse_71284_custom_post_password_msg( $form )
{
    // No cookie, the user has not sent anything until now.
    if ( ! isset ( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) )
        return $form;

    // Translate and escape.
    $msg = esc_html__( 'Sorry, your password is wrong.', 'your_text_domain' );

    // We have a cookie, but it doesn’t match the password.
    $msg = "<p class='custom-password-message text-center'>$msg</p>";

    return $msg . $form;
}
// -------------------------------------------------------------
// Clean Up
// -------------------------------------------------------------
function script_cleanup() {

  if(is_front_page()  ) {
    wp_dequeue_script('tribe-common');
    wp_dequeue_script('tribe-tooltip-js');

    wp_dequeue_script('contact-form-7');
  }

}
add_action('wp_footer', __NAMESPACE__ .'\\script_cleanup');


function remove_roots_share_buttons_assets() {
  wp_dequeue_style('roots-share-buttons');
}
add_action('wp_enqueue_scripts',  __NAMESPACE__ .'\\remove_roots_share_buttons_assets');
// -------------------------------------------------------------
// Clean Up
// -------------------------------------------------------------
add_filter( 'the_seo_framework_title_from_generation', function( $title, $args ) {
	/**
	 * @link https://developer.wordpress.org/reference/functions/is_post_type_archive/
	 */
	if ( is_post_type_archive( 'landmark' ) ) {
		$title = 'Explore NY';
	}

	return $title;
}, 10, 2 );

// -------------------------------------------------------------
// Changes past event views to reverse chronological order
// -------------------------------------------------------------
function tribe_past_reverse_chronological ($post_object) {
	$past_ajax = (defined( 'DOING_AJAX' ) && DOING_AJAX && $_REQUEST['tribe_event_display'] === 'past') ? true : false;
	if(tribe_is_past() || $past_ajax) {
		$post_object = array_reverse($post_object);
	}
	return $post_object;
}
add_filter('the_posts', __NAMESPACE__ .'\\tribe_past_reverse_chronological', 100);
/*
Plugin Name: Collapse ACF Repeaters by Default
Description: Meant to be used with <a href="https://wordpress.org/plugins/advanced-custom-field-repeater-collapser/" target="_blank">Advanced Custom Fields Repeater &amp; Flexible Content Fields Collapser</a>, this plugin defaults to collapsing all fields.
Plugin URI:  https://github.com/JulienMelissas/acf-collapser-collapse-default
Author:      Julien Melissas
Author URI:  http://www.julienmelissas.com
Version:     1.0
*/
/* Load the javascript on the ACF admin pages */
function collapse_acf_repeater() {
    ?>
    <script type="text/javascript">
        (function($){

            $(document).ready(function(){

                $('.directoryRepeater .acf-row').addClass('-collapsed');
                $('.directoryRepeater .acf-icon').addClass('collapsed');

            });

        })(jQuery);
    </script>
    <?php
}

add_action('acf/input/admin_head', __NAMESPACE__ .'\\collapse_acf_repeater');

/**
* Removes or edits the 'Protected:' part from posts titles
*/

function remove_protected_text() {
  return __('%s');
}
add_filter( 'protected_title_format',  __NAMESPACE__ .'\\remove_protected_text' );






function sji_customize_notice( $html, $notices ) {

	// If text is found in notice, then replace it
	if( stristr( $html, '. Please try viewing the full calendar for a complete list of events.' ) ) {
		 // Customize the message as needed
		 $html = str_replace( '. Please try viewing the full calendar for a complete list of events.', ' at this time, please check back.', $html );
	}

	return $html;

}
add_filter( 'tribe_the_notices', __NAMESPACE__ .'\\sji_customize_notice', 10, 2 );
