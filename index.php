<?php
/**
 * Plugin Name: Quick tag
 * Author: Rupom
 * Desciption: Plugin description
 * Version: 1.0
 */
function callback_enqueue_scripts($screen){
  if('post.php' == $screen){
    wp_enqueue_script( 'qt_js',plugin_dir_url( __FILE__ ).'/assets/js/main.js',array('quicktags','thickbox'),time(), true );
    wp_enqueue_script( 'qt_engine', plugin_dir_url( __FILE__ ).'/assets/js/engine.js', array('jquery'), time(),true );
    wp_enqueue_script( 'qt_phonetics', plugin_dir_url( __FILE__ ).'/assets/js/phonetics.js', array('jquery'), time(),true );
    wp_enqueue_script( 'qt_script', plugin_dir_url( __FILE__ ).'/assets/js/scripts.js', null, time(),true );
  }
  wp_localize_script('qt_js', 'qt_line', array(
    'p_url' => plugin_dir_url( __FILE__ ).'/assets/data.php',
  ));
}
add_action( 'admin_enqueue_scripts','callback_enqueue_scripts');

?>