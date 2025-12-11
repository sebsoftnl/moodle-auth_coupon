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
 * Plugin class for auth coupon
 *
 * File         auth.php
 * Encoding     UTF-8
 *
 * @package     auth_coupon
 *
 * @copyright   RvD
 * @author      RvD <helpdesk@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot . '/auth/email/auth.php');

/**
 * Plugin for no authentication.
 *
 * @copyright   RvD
 * @author      RvD <helpdesk@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class auth_plugin_coupon extends auth_plugin_email {
    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        // EVEN when we decided the mechanism should kinda work exactly the same as auth_email...
        // ... we HAVE to set the correct auth type.
        // Too many processes in Moodle use the authtype which _can_ fail.
        // We WILL force the user to auth=email depending on settings.
        $this->config = get_config('auth_coupon');
        if (!(bool)$this->config->forceauthemail) {
            $this->authtype = 'coupon';
        }
    }

    /**
     * Override core! We mimic our PARENT auth type.
     *
     * @return string
     */
    public function get_title() {
        return get_string('pluginname', "auth_coupon");
    }

    /**
     * Return a form to capture user details for account creation.
     * This is used in /login/signup.php.
     * @return moodle_form A form which edits a record from the user table.
     */
    public function signup_form() {
        $cdata = ['couponrequired' => (bool)$this->config->couponrequired];
        return new \block_coupon\forms\coupon\login_signup_form(null, $cdata);
    }

    /**
     * Sign up a new user ready for confirmation.
     * Password is passed in plaintext.
     *
     * @param object $user new user object
     * @param boolean $notify print notice with link and terminate
     */
    public function user_signup($user, $notify = true) {
        global $DB;
        $result = $this->user_signup_with_confirmation($user, false);

        // Assuming the process isn't broken.
        if ($result && !empty($user->id)) {
            // Force email auth?
            if ((bool)$this->config->forceauthemail) {
                $DB->execute('UPDATE {user} SET auth= ? WHERE id = ?', ['email', $user->id]);
            }
            // Claim coupon.
            \block_coupon\helper::claim_coupon($user->submissioncode, $user->id);
        }

        if ($notify) {
            global $CFG, $PAGE, $OUTPUT;
            $emailconfirm = get_string('emailconfirm');
            $PAGE->navbar->add($emailconfirm);
            $PAGE->set_title($emailconfirm);
            $PAGE->set_heading($PAGE->course->fullname);
            echo $OUTPUT->header();
            notice(get_string('emailconfirmsent', '', $user->email), "$CFG->wwwroot/index.php");
        } else {
            return $result;
        }
    }
}
