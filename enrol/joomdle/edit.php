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
 * Adds new instance of enrol_paypal to specified course
 * or edits current instance.
 *
 * @package    enrol
 * @subpackage paypal
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once('edit_form.php');

$courseid   = required_param('courseid', PARAM_INT);
$instanceid = optional_param('id', 0, PARAM_INT); // instanceid

$course = $DB->get_record('course', array('id'=>$courseid), '*', MUST_EXIST);
$context = context_course::instance($course->id, MUST_EXIST);

require_login($course);
//require_capability('enrol/paypal:config', $context);

$PAGE->set_url('/enrol/joomdle/edit.php', array('courseid'=>$course->id, 'id'=>$instanceid));
$PAGE->set_pagelayout('admin');

$return = new moodle_url('/enrol/instances.php', array('id'=>$course->id));
if (!enrol_is_enabled('joomdle')) {
    redirect($return);
}

$plugin = enrol_get_plugin('joomdle');

if ($instanceid) {
    $instance = $DB->get_record('enrol', array('courseid'=>$course->id, 'enrol'=>'joomdle', 'id'=>$instanceid), '*', MUST_EXIST);
} else {
    require_capability('moodle/course:enrolconfig', $context);
    // no instance yet, we have to add new instance
    navigation_node::override_active_url(new moodle_url('/enrol/instances.php', array('id'=>$course->id)));
    $instance = new stdClass();
    $instance->id       = null;
    $instance->courseid = $course->id;
}

$mform = new enrol_joomdle_edit_form(NULL, array($instance, $plugin, $context));

if ($mform->is_cancelled()) {
    redirect($return);

} else if ($data = $mform->get_data()) {
    if ($instance->id) {
        $instance->status         = $data->status;
        $instance->name           = $data->name;
        $instance->cost           = $data->cost;
        $instance->currency       = $data->currency;
        $instance->roleid         = $data->roleid;
        $instance->enrolperiod    = $data->enrolperiod;
        $instance->enrolstartdate = $data->enrolstartdate;
        $instance->enrolenddate   = $data->enrolenddate;
        $instance->customtext1   = $data->customtext1;
        $instance->customtext2   = $data->customtext2['text'];
    //    $instance->customtext2   = $data->customtext2;

/*
		 if (!empty($data->customtext2) && is_array($data->customtext2)) {
            $data->format = $data->description['format'];
            $data->description = $data->description['text'];
        } else if (empty($data->description)) {
            $data->description = '';
            $data->format = editors_get_preferred_format();
        }
        // Ensure form is defaulted correctly
        if (empty($data->format)) {
            $data->format = editors_get_preferred_format();
        }
*/


        $instance->timemodified   = time();
        $DB->update_record('enrol', $instance);

    } else {
        $fields = array('status'=>$data->status, 'name'=>$data->name, 'cost'=>$data->cost, 'currency'=>$data->currency, 'roleid'=>$data->roleid,
                        'enrolperiod'=>$data->enrolperiod, 'enrolstartdate'=>$data->enrolstartdate, 'enrolenddate'=>$data->enrolenddate, 'customtext1'=>$data->customtext1, 'customtext2'=>$data->customtext2['text']);
        $plugin->add_instance($course, $fields);
    }

    redirect($return);
}

$PAGE->set_heading($course->fullname);
$PAGE->set_title(get_string('pluginname', 'enrol_joomdle'));

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'enrol_joomdle'));
$mform->display();
echo $OUTPUT->footer();
