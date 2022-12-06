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
 * Plugin strings are defined here.
 *
 * @package     auth_coupon
 * @category    string
 * @copyright   2022 Ing. R.J. van Dongen <rogier@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_description'] = 'Email self registration/authentication with coupon code processing';
$string['pluginname'] = 'Email/coupon authentication';
$string['couponrequired'] = 'Require coupon code on signup?';
$string['couponrequired_desc'] = 'When enabled signups cannot be completed without entering a valid coupon code.';
$string['forceauthemail'] = 'Force authentication method to email after successfull signup?';
$string['forceauthemail_desc'] = 'When enabled the auth for the signed up user will be forced to email.
The reason is pretty simple: processes can break and auth_coupon doesnt really differ from auth_email
except for potential coupon code claimage';
