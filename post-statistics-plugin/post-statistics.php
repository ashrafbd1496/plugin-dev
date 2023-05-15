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

add_action('admin_menu','plugin_setting');

function plugin_setting(){
    add_options_page('Word Count Settings', 'Word Count','manage_options','word-count-settings-page', 'OurSettingPageHtml');
}

function OurSettingPageHtml(){ ?>
    Bismiallah Hir rahmainir Rahim from new Plugin
<?php }