<?php 
/*
 * Plugin Name:       Add To Text Plugin
 * Plugin URI:        https://github.com/ashrafbd1496/plugin-dev
 * Description:       This plugin willl add text at bottom of every post
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md Ashraf Uddin
 * Author URI:        https://ashrafbd.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/ashrafbd1496/plugin-dev
 * Text Domain:       adt-plugin
 * Domain Path:       /languages
 */


 add_filter('the_content','add_to_end_of_the_post' );

 function add_to_end_of_the_post($content){
    if(is_single() && is_main_query()){
        return $content . '<h3>This text has added using plugin</h3>';
    }

    return $content;
   
 }