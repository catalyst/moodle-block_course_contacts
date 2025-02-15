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
 * Block Course_Contacts version file.
 *
 * @package    block_course_contacts
 * @author     Mark Ward
 *             2020 Richard Oelmann
 * @copyright  Mark Ward
 * @copyright  2020 R. Oelmann
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2020050105;  // YYYYMMDDHH (year, month, day, 24-hr time).
$plugin->requires = 2019052000; // YYYYMMDDHH (This is the release version for Moodle 2.0).
$plugin->release = '3.9.0.1'; // Plugin release.
$plugin->maturity   = MATURITY_STABLE;
$plugin->component = 'block_course_contacts'; // Full name of the plugin (used for diagnostics).
$plugin->supported = [401, 405];
