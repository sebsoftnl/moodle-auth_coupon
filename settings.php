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
 * Settings for auth coupon
 *
 * File         settings.php
 * Encoding     UTF-8
 *
 * @package     auth_coupon
 *
 * @copyright   2024 RvD
 * @author      RvD <helpdesk@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree || $hassiteconfig) {

    $config = get_config('auth_coupon');
    // Settings.
    $settings->add(new admin_setting_heading('auth_coupon_settings', '',
            get_string('auth_description', 'auth_coupon')));

    $settings->add(new admin_setting_configcheckbox('auth_coupon/couponrequired',
            get_string('couponrequired', 'auth_coupon'),
            get_string('couponrequired_desc', 'auth_coupon'),
            0));

    $settings->add(new admin_setting_configcheckbox('auth_coupon/forceauthemail',
            get_string('forceauthemail', 'auth_coupon'),
            get_string('forceauthemail_desc', 'auth_coupon'),
            0));
}
