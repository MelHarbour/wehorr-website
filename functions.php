<?php 

function register_my_menus() { //dynamic navigation
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

register_sidebar(array(
  'name' => __( 'Footer Sidebar 1' ),
  'id' => 'footer-sidebar-1',
  'description' => __( 'Widgets in this area will be shown in the footer.' ),
  'before_widget' => '<div class="footwidgets">',  
  'after_widget' => '</div>',  
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
register_sidebar(array(
  'name' => __( 'Footer Sidebar 2' ),
  'id' => 'footer-sidebar-2',
  'description' => __( 'Widgets in this area will be shown in the footer.' ),
  'before_widget' => '<div class="footwidgets col">',  
  'after_widget' => '</div>',  
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));                
function themeslug_theme_customizer( $wp_customize ) {
    // Fun code will go here
	$wp_customize->add_section( 'themeslug_logo_section' , array( //creates section for our logo upload to
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
	$wp_customize->add_setting( 'themeslug_logo' );//registers our new setting
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array( //lets us use an image uploader
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );
}
add_action('customize_register', 'themeslug_theme_customizer');
remove_filter('template_redirect','redirect_canonical');


function favicon_theme_customizer( $wp_customize ) {
    // Fun code will go here
	$wp_customize->add_section( 'favicon_logo_section' , array( //creates section for our logo upload to
    'title'       => __( 'Favicon', 'favicon' ),
    'priority'    => 30,
    'description' => 'Upload a favicon',
) );
	$wp_customize->add_setting( 'favicon_logo' );//registers our new setting
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon_logo', array( //lets us use an image uploader
    'label'    => __( 'Favicon', 'favicon' ),
    'section'  => 'favicon_logo_section',
    'settings' => 'favicon_logo',
) ) );
}
add_action('customize_register', 'favicon_theme_customizer');




function mytheme_customize_register( $wp_customize ) {//control colors dynamically in wordpress
   //All our sections, settings, and controls will be added here
   $colors = array();
$colors[] = array(
	'slug'=>'content_text_color', 
	'default' => '#a9a6a3',
	'label' => __('Content Text Color', 'Ari')
);
$colors[] = array(
	'slug'=>'content_link_color', 
	'default' => '#f89842',
	'label' => __('Content Link Color', 'Ari')
);
$colors[] = array(
	'slug'=>'content_bg_color', 
	'default' => '#f89842',
	'label' => __('Content Background Color', 'Ari')
);
$colors[] = array(
	'slug'=>'nav_bg_color1', 
	'default' => '#a9398d',
	'label' => __('Navigation Background Color', 'Ari')
);
$colors[] = array(
	'slug'=>'nav_bg_color2', 
	'default' => '#c574ae',
	'label' => __('Navigation Dropdown and Selected Color', 'Ari')
);
foreach( $colors as $color ) {
	// SETTINGS
	$wp_customize->add_setting(
		$color['slug'], array(
			'default' => $color['default'],
			'type' => 'option', 
			'capability' => 
			'edit_theme_options'
		)
	);
	// CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$color['slug'], 
			array('label' => $color['label'], 
			'section' => 'colors',
			'settings' => $color['slug'])
		)
	);
}
}
add_action( 'customize_register', 'mytheme_customize_register' );
/**
 * Add "first" and "last" CSS classes to dynamic sidebar widgets. Also adds numeric index class for each widget (widget-1, widget-2, etc.)
 */
function widget_first_last_classes($params) {

	global $my_widget_num; // Global a counter array
	$this_id = $params[0]['id']; // Get the id for the current sidebar we're processing
	$arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets	

	if(!$my_widget_num) {// If the counter array doesn't exist, create it
		$my_widget_num = array();
	}

	if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets
		return $params; // No widgets in this sidebar... bail early.
	}

	if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar
		$my_widget_num[$this_id] ++;
	} else { // If not, create it starting with 1
		$my_widget_num[$this_id] = 1;
	}

	$class = 'class="widget-' . $my_widget_num[$this_id] . ' '; // Add a widget number class for additional styling options

	if($my_widget_num[$this_id] == 1) { // If this is the first widget
		$class .= 'widget-first ';
	} elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) { // If this is the last widget
		$class .= 'widget-last ';
	}

	$params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']); // Insert our new classes into "before widget"

	return $params;

}
add_filter('dynamic_sidebar_params','widget_first_last_classes');
add_filter('widget_text', 'do_shortcode');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Custom widgets
include_once('widgets/wd-contact-widgetplugin.php');

add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'wp-block-library' );
} );
?>
