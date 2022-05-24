<?php 
/**
 * Plugin Name: Prueba Plugin
 * Plugin URI: https://carlossaumeth.com
 * Description: Este Plugin fue Desarrollado para Oferta Laboral
 * Version: 1.0.0
 * Author: Carlos Saumeth
 * Author URI: https://carlossaumeth.com
 * License: GPL2
 */

add_action( 'admin_menu', 'extra_post_info_menu' );  function extra_post_info_menu()
{ $page_title = 'ScanToolWP';   $menu_title = 'ScanToolWP';   $capability = 'manage_options';   $menu_slug  = 'extra-post-info';   $function   = 'extra_post_info_page';   $icon_url   = 'dashicons-media-code';   $position   = 4;    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position ); }

if( !function_exists("extra_post_info_page") ) { function extra_post_info_page(){ ?>   <h1>ScanToolWP Dashboard</h1>

<?php } } ?>