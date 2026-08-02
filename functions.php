<?php
/**
 * Serenity Theme functions.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/inc/constants.php';
require_once SERENITY_DIR . '/inc/setup.php';
require_once SERENITY_DIR . '/inc/enqueue.php';

require_once SERENITY_DIR . '/inc/integrations/events-manager.php';

require_once SERENITY_DIR . '/post-types/announcements.php';
require_once SERENITY_DIR . '/inc/announcement-meta.php';

require_once SERENITY_DIR . '/post-types/literature.php';
require_once SERENITY_DIR . '/inc/literature-meta.php';

require_once SERENITY_DIR . '/inc/integrations/contact-form7.php';
require_once SERENITY_DIR . '/inc/integrations/polylang.php';
require_once SERENITY_DIR . '/inc/seo.php';
require_once SERENITY_DIR . '/inc/performance.php';
require_once SERENITY_DIR . '/inc/security.php';
require_once SERENITY_DIR . '/inc/admin-notices.php';
