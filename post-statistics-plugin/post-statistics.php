<?php 
/*
 * Plugin Name:       Post Statistics
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
 * Text Domain:       pstatistics
 * Domain Path:       /languages
 */

 class WCAndTime{
    function __construct(){
        add_action('admin_menu',array($this, 'adminPage'));
        add_action('admin_init',array($this, 'settings'));
    }
    function settings(){
         
        register_setting('wordcountplugin', 'wcp_location', array('sanitize_callback' => 'sanitize_text_field', 'default' => '0'));
    }

    function adminPage(){
        add_options_page('Word Count Settings', 'Word Count','manage_options','word-count-settings-page', array($this, 'pluginHtml'));
    }
     
    function pluginHtml(){ ?>
        <div class="wrap">
            <h2>Word Count Settings </h2>
        </div>
    <?php }
    

 }

 $wcandtimeplugin = new WCAndTime();




