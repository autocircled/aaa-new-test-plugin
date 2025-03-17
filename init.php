<?php
/**
 * AAA New Test Plugin
 *
 * Plugin Name: AAA New Test Plugin
 * Plugin URI:  https://wordpress.org/plugins/classic-editor/
 * Description: Enables the WordPress AAA New Test Plugin
 * Version:     1.0.0
 * Author:      autocircle
 * Author URI:  https://github.com/autocircled/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: aaa-new-test-plugin
 * Domain Path: /languages
 * Requires at least: 4.9
 * Requires PHP: 5.2.4
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://repo.tic.com.bd/plugin-updates/aaa-new-test-plugin/plugin.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'aaa-new-test-plugin'
);