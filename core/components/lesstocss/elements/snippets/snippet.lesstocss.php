<?php
/**
 * A snippet for returning css from less file.
 * Usage:
 * <link rel="stylesheet" type="text/css" href="[[lesstocss? 
 * &lessFile=`assets/template/bootstrap/main.less`
 * &relativeURL=`[[++site_url]]assets/template/bootstrap/`]]">
 */
require_once MODX_CORE_PATH.'components/lesstocss/less.php/Less.php';

$options = array( 'compress'=>true );
$to_cache = array( $scriptProperties['lessFile'] => $scriptProperties['relativeURL'] );
Less_Cache::$cache_dir = MODX_ASSETS_PATH.'components/lesstocss/cache/';
$css_file_name = Less_Cache::Get( $to_cache, $options );
return MODX_ASSETS_URL.'components/lesstocss/cache/'.$css_file_name;