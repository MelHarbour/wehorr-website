<?php
/*
Plugin Name: WD Contact Widget
Plugin URI:
Description: A brief description of the Plugin.
Version: 1.0
Author: Vicky Gordine
Author URI: 
License: 
*/
class wd_contact extends WP_Widget {

	// constructor
    function wd_contact() {
        parent::WP_Widget(false, $name = __('WD Contact Widget', 'wp_widget_plugin') );
    }

	// widget form creation
function form($instance) {

// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
	 $textfield = apply_filters( 'widget_textarea', empty( $instance['textfield'] ) ? '' : $instance['textfield'], $instance );
	 $emaillink = esc_attr($instance['emaillink']);
	 $facebooklink = esc_attr($instance['facebooklink']);
	 $twitterlink = esc_attr($instance['twitterlink']);
	 $googlelink = esc_attr($instance['googlelink']);
	 $tripadlink = esc_attr($instance['tripadlink']);
  
} else {
     $title = '';
	 $textfield = '';
	 $emaillink = ''; 
	 $facebooklink = ''; 
	 $twitterlink = '';
	 $googlelink = '';
	 $tripadlink = '';

}
?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:<br>', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('textfield'); ?>"><?php _e('Text:<br>', 'wp_widget_plugin'); ?></label>
<textarea style="min-height:200px;" id="<?php echo $this->get_field_id('textfield'); ?>" name="<?php echo $this->get_field_name('textfield'); ?>"><?php echo $textfield; ?></textarea>
</p>

<p>
<label for="<?php echo $this->get_field_id('emaillink'); ?>"><?php _e('Email link:<br>', 'wp_widget_plugin'); ?></label>
<input id="<?php echo $this->get_field_id('emaillink'); ?>" name="<?php echo $this->get_field_name('emaillink'); ?>" type="text" value="<?php echo $emaillink; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('facebooklink'); ?>"><?php _e('Facebook link:<br>', 'wp_widget_plugin'); ?></label>
<input id="<?php echo $this->get_field_id('facebooklink'); ?>" name="<?php echo $this->get_field_name('facebooklink'); ?>" type="text" value="<?php echo $facebooklink; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('twitterlink'); ?>"><?php _e('Twitter link:<br>', 'wp_widget_plugin'); ?></label>
<input id="<?php echo $this->get_field_id('twitterlink'); ?>" name="<?php echo $this->get_field_name('twitterlink'); ?>" type="text" value="<?php echo $twitterlink; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('googlelink'); ?>"><?php _e('Google + link:<br>', 'wp_widget_plugin'); ?></label>
<input id="<?php echo $this->get_field_id('googlelink'); ?>" name="<?php echo $this->get_field_name('googlelink'); ?>" type="text" value="<?php echo $googlelink; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('tripadlink'); ?>"><?php _e('Trip Advisor link:<br>', 'wp_widget_plugin'); ?></label>
<input id="<?php echo $this->get_field_id('tripadlink'); ?>" name="<?php echo $this->get_field_name('tripadlink'); ?>" type="text" value="<?php echo $tripadlink; ?>" />
</p>

<?php
}
	// update widget
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
	  if ( current_user_can('unfiltered_html') )
		$instance['textfield'] =  $new_instance['textfield'];
	 else
		$instance['textfield'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['textfield']) ) );
	
	 $instance['emaillink'] = strip_tags($new_instance['emaillink']);
	 $instance['facebooklink'] = strip_tags($new_instance['facebooklink']);
	 $instance['twitterlink'] = strip_tags($new_instance['twitterlink']);
	 $instance['googlelink'] = strip_tags($new_instance['googlelink']);
	 $instance['tripadlink'] = strip_tags($new_instance['tripadlink']);
      
     return $instance;
}

	// display widget
function widget($args, $instance) {
   extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
   $textfield = $instance['textfield'];
   $emaillink = $instance['emaillink'];
   $facebooklink = $instance['facebooklink'];
   $twitterlink = $instance['twitterlink'];
   $googlelink = $instance['googlelink'];
   $tripadlink = $instance['tripadlink'];
   
   echo $before_widget;
   echo '<div class="wd-contact">';

   // Check if title is set
   if ( $title ) {
      echo $before_title . $title . $after_title;
   }
	
   if ( $textfield ) {
      echo wpautop($textfield);
   }
   
   if( $emaillink ) {?>
	   <?php echo '<p><a href="mailto:'.$emaillink.'" title="Email us">'.$emaillink.'</a></p>'; ?>
	   <?php  } ?>
   
   <?php echo '<p>';?>
   <?php 
   if( $facebooklink ) {?>
	   <?php echo '<a href="http://'.$facebooklink.'" target="_BLANK" title="Find us on Facebook" >'?><img src="<?php bloginfo( 'template_directory' ); ?>/widgets/images/social-facebook.png" alt="<?php bloginfo( 'name' ); ?> on Facebook"></a><?php ; ?>
	   <?php  }
	   
	if( $twitterlink ) {?>
	   <?php echo '<a href="http://'.$twitterlink.'" target="_BLANK" title="Follow us on Twitter" >'?><img src="<?php bloginfo( 'template_directory' ); ?>/widgets/images/social-twitter.png" alt="<?php bloginfo( 'name' ); ?> on Twitter"></a><?php ; ?>
	   <?php  }
	   
	if( $googlelink ) {?>
	   <?php echo '<a href="http://'.$googlelink.'" target="_BLANK" title="Find us on Google +" >'?><img src="<?php bloginfo( 'template_directory' ); ?>/widgets/images/social-googleplus.png" alt="<?php bloginfo( 'name' ); ?> on Google +"></a><?php ; ?>
	   <?php  }  
	   
	if( $tripadlink ) {?>
	   <?php echo '<a href="http://'.$tripadlink.'" target="_BLANK" title="Find us on Trip Advisor" >'?><img src="<?php bloginfo( 'template_directory' ); ?>/widgets/images/social-tripadvisor.png" alt="<?php bloginfo( 'name' ); ?> on Trip Advisor"></a><?php ; ?>
	   <?php  }   
	   
   echo '</p></div>';
   echo $after_widget;
}
}
// register widget
add_action('widgets_init', create_function('', 'return register_widget("wd_contact");'));?>