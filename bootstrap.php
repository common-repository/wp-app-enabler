<?php
/*
Plugin Name: WP App Enabler
Plugin URI: http://tumblersedge.nl/
Description: Enables your WordPress site to run in App mode in Android and iOS.
Version: 0.2
Author: Kay van Bree
Author URI: http://tumblersedge.nl/
*/

/*
 * Enables the 'native mode' for Android
 */
if(!function_exists('wae_enable_android_app_mode')){
    add_action('wp_head', 'wae_enable_android_app_mode');
    add_action('admin_head', 'wae_enable_android_app_mode');
    
    function wae_enable_android_app_mode(){
        ?><meta name="mobile-web-app-capable" content="yes"><?php
    }
}

/*
 * Enables the 'native mode' for iOS
 */
if(!function_exists('wae_enable_ios_app_mode')){
    add_action('wp_head', 'wae_enable_ios_app_mode');
    add_action('admin_head', 'wae_enable_ios_app_mode');
    
    function wae_enable_ios_app_mode(){
        ?><meta name="apple-mobile-web-app-capable" content="yes"><?php
    }
}

/*
 * Sets the correct viewport
 */
if(!function_exists('wae_set_viewport')){
    add_action('wp_head', 'wae_set_viewport');
    add_action('admin_head', 'wae_set_viewport');
    
    function wae_set_viewport(){
        ?><meta name="viewport" content="width=device-width, initial-scale=1"><?php
    }
}
?>
