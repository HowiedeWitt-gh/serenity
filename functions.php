<?php
/**
 * NA Outaouais Theme functions.
 *
 * @package NA_Outaouais
 */
require_once get_template_directory()
. '/inc/constants.php';



defined( 'ABSPATH' ) || exit;


define( 'NA_OUTAOUAIS_VERSION', '0.1.0' );
define( 'NA_OUTAOUAIS_DIR', get_template_directory() );
define( 'NA_OUTAOUAIS_URI', get_template_directory_uri() );


/**
 * Load translations.
 */
function na_outaouais_load_textdomain() {

	load_theme_textdomain(
		'na-outaouais',
		NA_OUTAOUAIS_DIR . '/languages'
	);

}

add_action(
	'after_setup_theme',
	'na_outaouais_load_textdomain'
);


require_once NA_OUTAOUAIS_DIR . '/inc/setup.php';
require_once NA_OUTAOUAIS_DIR . '/inc/enqueue.php';

require_once NA_OUTAOUAIS_DIR . '/inc/integrations/events-manager.php';

require_once NA_OUTAOUAIS_DIR . '/post-types/announcements.php';
require_once NA_OUTAOUAIS_DIR . '/inc/announcement-meta.php';

require_once NA_OUTAOUAIS_DIR . '/post-types/literature.php';
require_once NA_OUTAOUAIS_DIR . '/inc/literature-meta.php';

require_once NA_OUTAOUAIS_DIR . '/inc/integrations/contact-form7.php';

require_once NA_OUTAOUAIS_DIR . '/inc/integrations/polylang.php';

require_once NA_OUTAOUAIS_DIR . '/inc/seo.php';

require_once NA_OUTAOUAIS_DIR . '/inc/performance.php';

require_once NA_OUTAOUAIS_DIR . '/inc/security.php';

require_once NA_OUTAOUAIS_DIR . '/inc/admin-notices.php';