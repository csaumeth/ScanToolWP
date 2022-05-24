<?php 
/**
 * Plugin Name: Scan Tool Wp
 * Plugin URI: https://carlossaumeth.com
 * Description: Este Plugin fue Desarrollado para Oferta Laboral
 * Version: 1.0.0
 * Author: Carlos Saumeth
 * Author URI: https://carlossaumeth.com
 * Text Domain: Scan-Tool-Main
 * Domain Path: /lenguages/
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
 
add_action("admin_menu", "ScanToolWpMenu");
function ScanToolWpMenu()
{
  add_menu_page(" Home - Scan Tool Wp", "Scan Tool Wp", 4, "STWP-Home", "STWPHomeMenu" );
  add_submenu_page("STWP-Home", "Dashboard - Scan Tool Wp", "Dashboard", 4, "STWP-Dashboard", "STWPDashboard");
  add_submenu_page("STWP-Home", "About - Scan Tool Wp", "About", 4, "STWP-About", "STWPAbout");
}

add_action ('admin_menu', 'ScanToolWpMenu');

function STWPDashboard()
{
echo "dsa";
}

function STWPAbout()
{
  echo "Walrus";
}

?>