<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version information for auth coupon
 *
 * File         version.php
 * Encoding     UTF-8
 *
 * @package     auth_coupon
 *
 * @copyright   2022 Ing. R.J. van Dongen
 * @author      R.J. van Dongen <rogier@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
$plugin = new stdClass();
$plugin->version   = 2022090100;
$plugin->requires  = 2020110900;      // YYYYMMDDHH (This is the release version for Moodle 3.10).
$plugin->release   = '3.7.0 (build 2022090100)';
$plugin->component = 'auth_coupon'; // Full name of the plugin (used for diagnostics).
$plugin->maturity  = MATURITY_STABLE;
$plugin->cron      = 0;
$plugin->dependencies = [
    'auth_email' => ANY_VERSION,
    'block_coupon' => 2022080100
];
