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
 
/** Creacion de Menu y Submenus Plugin **/
add_action("admin_menu", "ScanToolWpMenu");
function ScanToolWpMenu()
{
  add_menu_page(" Home - Scan Tool Wp", "Scan Tool Wp", 4, "STWP-Home", "STWPHomeMenu" );
  add_submenu_page("STWP-Home", "Dashboard - Scan Tool Wp", "Dashboard", 4, "STWP-Dashboard", "STWPDashboard");
  add_submenu_page("STWP-Home", "About - Scan Tool Wp", "About", 4, "STWP-About", "STWPAbout");
}

add_action ('admin_menu', 'ScanToolWpMenu');


/** Funcion Menu Home **/
function STWPHomeMenu()
{
    
echo "<h2>Gracias por Instalar este Plugin! Seleccion cualquier Opcion del Menu!</h2>";

echo "<a href='../wp-admin/admin.php?page=STWP-Dashboard'><button>Dashboard</button></a><br><br>";
echo "<a href='../wp-admin/admin.php?page=STWP-About'><button>About</button></a><br><br>";

}

/** Funcion Menu Dashboard**/
function STWPDashboard()
{
    
echo "<h2>Datos Sitio Web</h2>";
echo "Nombre del Sitio Web: ", get_bloginfo( 'name' ), "<br>";
echo "Direccion de Instalacion: ", home_url(),"<br>";
echo "Direccion del Sitio Web: ", site_url(),"<br>";
echo "Version Instalacion Wordpress: ", bloginfo('version'), "<br>";

// Creacion de Array Vacio
$themes = array();

// Carga de Themas Instalados
$all_themes = get_themes();

// Build theme data manually
foreach ($all_themes as $theme) {
  $themes{ $theme->stylesheet } = array(
    'Name' => $theme->get('Name'),
    'Status' => $theme->get('Status')
  );
}

// Imprimir Temas
echo('<pre>');
var_dump($themes);
echo('</pre>');

/** Lista de Plugins Instalados **/
echo "Lista de Plugins Instalados/Activos: ",
$author_id = get_the_author_meta('ID');
echo count_user_posts($admin),"<br>";

/** Numero de Paginas Publicadas **/
$count_pages = wp_count_posts('page');
	$total_pages = $count_pages->publish;
	echo "Numero de Paginas Publicadas: ", $total_pages,"<br>";

/** Numero de Post Publicados **/
echo "Numero de Post Publicados: ",
$author_id = get_the_author_meta('ID');
echo count_user_posts($admin),"<br>";

}

/** Funcion Menu About **/
function STWPAbout()
{
echo "<h2>About</h2>";
echo "Nombre del Autor del Plugin: Carlos Saumeth<br><br>";
echo "<a href='https://www.facebook.com/nativapps' target='_blank'><button>Facebook</button></a><br><br>";
echo "<a href='https://www.instagram.com/nativapps/' target='_blank'><button>Instagram</button></a><br><br>";
echo "<a href='https://www.linkedin.com/company/nativapps-inc/' target='_blank'><button>LinkedIn</button></a><br><br>";
}

?>