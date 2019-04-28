<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;
/**hopfully this fixes my plugin issue*/
Config::define('WP_DEBUG', true);
Config::define('DISALLOW_FILE_MODS', false);
