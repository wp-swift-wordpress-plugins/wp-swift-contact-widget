<?php
/*
  Plugin Name:       WP Swift: Footer Contact Widget
  Description:       Placeholder widget for contact details in the footer
  Version:           1.0.0
  Author:            Gary Swift
  License:           GPL-2.0+
  Text Domain:       wp-swift-contact-widget
*/

// Inclide the ACF groups
require_once plugin_dir_path( __FILE__ ) . 'acf-field-groups/wp-swift-contact-widget-contact-clone-field.php';
require_once plugin_dir_path( __FILE__ ) . 'acf-field-groups/wp-swift-contact-widget-social-clone.php';
require_once plugin_dir_path( __FILE__ ) . 'acf-field-groups/wp-swift-contact-widget.php';

class WP_Swift_Contact_Widget extends WP_Widget {
 
    public function __construct() {
     
        parent::__construct(
            'wp_swift_Contact_widget',
            __( 'WP Swift: Footer Contact Widget', 'wp-swift-contact-widget' ),
            array(
                'classname'   => 'wp_swift_Contact_widget',
                'description' => __( 'Placeholder widget for contact details.', 'wp-swift-contact-widget' )
                )
        );
       
        load_plugin_textdomain( 'wp-swift-contact-widget', false, basename( dirname( __FILE__ ) ) . '/languages' );
    }
 
    /**  
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {    
        include( plugin_dir_path( __FILE__ ) . '_wp-swift-contact-widget.php');
    }
 
  
    /**
      * Sanitize widget form values as they are saved.
      *
      * @see WP_Widget::update()
      *
      * @param array $new_instance Values just sent to be saved.
      * @param array $old_instance Previously saved values from database.
      *
      * @return array Updated safe values to be saved.
      */
    public function update( $new_instance, $old_instance ) {        
        return $instance;
    }
  
    /**
      * Back-end widget form.
      *
      * @see WP_Widget::form()
      *
      * @param array $instance Previously saved values from database.
      */
    public function form( $instance ) { 
      //The ACF API will handle this
      ?><!-- <p>
        All settings for this are set in the <b>BrightLight</b> menu.
      </p> --><?php
    }
}
 
/* Register the widget */
add_action( 'widgets_init', function(){
     register_widget( 'WP_Swift_Contact_Widget' );
});