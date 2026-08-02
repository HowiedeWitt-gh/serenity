<?php
/**
 * NA Outaouais Theme functions.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


define( 'NA_OUTAOUAIS_VERSION', '0.1.0' );
define( 'NA_OUTAOUAIS_DIR', get_template_directory() );
define( 'NA_OUTAOUAIS_URI', get_template_directory_uri() );


require_once NA_OUTAOUAIS_DIR . '/inc/setup.php';
require_once NA_OUTAOUAIS_DIR . '/inc/enqueue.php';

require_once NA_OUTAOUAIS_DIR . '/post-types/meetings.php';
require_once NA_OUTAOUAIS_DIR . '/inc/meta-boxes.php';