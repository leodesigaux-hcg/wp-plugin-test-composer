<?php

/**
 * Plugin Name: WP Plugin Test Composer
 * Description: Affiche une notice « Welcome » sur toutes les pages d’administration.
 * Version: 1.0.0
 * Requires at least: 5.0
 * Requires PHP: 8.1
 */

if (! defined('ABSPATH')) {
    exit;
}

use Devhcg\WpPluginTestComposer\GetMessage;


add_action('admin_notices', static function (): void {
    $getMessage = new GetMessage();
    echo '<div class="notice notice-info is-dismissible"><p>' . $getMessage->getMessage() . '</p></div>';
});
