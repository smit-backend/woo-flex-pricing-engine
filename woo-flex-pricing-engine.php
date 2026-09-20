<?php
/**
 * Plugin Name:       FlexPrice Engine: WooCommerce Dynamic Variable Pricing
 * Plugin URI:        https://github.com/smit-backend/woo-flex-pricing-engine
 * Description:       Decoupled variable pricing engine for WooCommerce computing dynamic wholesale, tier, and rule-based pricing arrays on-the-fly.
 * Version:           1.0.0
 * Author:            smit-backend
 * Author URI:        https://github.com/smit-backend
 * License:           MIT
 * Text Domain:       woo-flex-pricing-engine
 */

if (!defined('ABSPATH')) {
    exit;
}

final class PricingEngine
{
    public static function boot(): void
    {
        // WordPress hooks bootstrapping
    }
}

add_action('plugins_loaded', ['PricingEngine', 'boot']);
