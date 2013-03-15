<?php

include(t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Php/main.functions.php');

$GLOBALS['wpdb'] = new mock();
$GLOBALS['wp_rewrite'] = new mock();

include(t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Php/main.includes.php');








if ( TEMPLATEPATH !== STYLESHEETPATH && file_exists( STYLESHEETPATH . '/functions.php' ) )
	include( STYLESHEETPATH . '/functions.php' );
if ( file_exists( TEMPLATEPATH . '/functions.php' ) )
	include( TEMPLATEPATH . '/functions.php' );

do_action('after_setup_theme');

/**
 * @return string
 */
#function get_template_directory_uri() {
#	$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
#	$basePath  = $wpAdapter->confEvaluated['path'];
#	return $basePath;
#}
