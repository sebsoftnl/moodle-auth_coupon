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
 * @copyright   2024 RvD
 * @author      RvD <helpdesk@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
$plugin = new stdClass();
$plugin->version   = 2025120100;
$plugin->requires  = 2023042400;
$plugin->release   = '4.0.2 (build 2025120100)';
$plugin->component = 'auth_coupon';
$plugin->maturity  = MATURITY_STABLE;
$plugin->supported = [402, 501];
$plugin->dependencies = [
    'auth_email' => ANY_VERSION,
    'block_coupon' => 2024040900,
];
