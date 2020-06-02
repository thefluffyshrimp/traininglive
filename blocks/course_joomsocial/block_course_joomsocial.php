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
 * Course list block.
 *
 * @package    block_course_list
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

include_once($CFG->dirroot . '/course/lib.php');
use theme_moove\util\extras;

class block_course_joomsocial extends block_list {
    function init() {
        $this->title = get_string('pluginname', 'block_course_joomsocial');
    }

    function has_config() {
        return true;
    }

    public function course_joomsocial_block_form($id_courses) {
        GLOBAL $DB, $CFG;
        // code adapted from rate.php
        $form = "<div class='form'>";
            $form .='<form method="post" action="' . $CFG->wwwroot . '/blocks/course_joomsocial/update.php"><p>'
                    . '  <input name="id" type="hidden" value="' . $id_course . '" /></p><p>';
            foreach($id_courses as $id_course) {
                 $coursename = $DB->get_record('course', array('id' => $id_course));
                 $form .= '<input type="checkbox" name="course" value="' . $id_course . '" alt="Add of ' . $id_course . '"  />' . $coursename->fullname . ' '.'<br>';
            }
        $form .= '</p><p><input type="submit" value="Submit"/></p></form>';
        $form .= '</form>';        
        $form .= '</div >';

        return $form;
    }
    public function get_content() {
        global $CFG, $COURSE, $USER, $DB, $OUTPUT, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();

       // if (substr($PAGE->pagetype, 0, 11) == 'course-view') {
           // $sql='SELECT * FROM {course}';

            $courses = $DB->get_records_sql('SELECT * FROM {course} WHERE category>0');
            
            foreach($courses as $course){
                
                $courseids[] = $course->id;
               // print_r($course->id);
                //array_push($courseids, $course->id);
            }
           // print_r($courseids);
            //die;
            $this->content->items[] = $this->course_joomsocial_block_form($courseids);

            // Output current rating.
            
        //} else {
            /*if ($this->page->user_is_editing()) {
                $this->content->items[] = get_string('editingsitehome', 'block_course_joomsocial');
            }*/
       // }
        return $this->content;

    }

 /*   function get_remote_courses() {
        global $CFG, $USER, $OUTPUT;

        if (!is_enabled_auth('mnet')) {
            // no need to query anything remote related
            return;
        }

        $icon = $OUTPUT->pix_icon('i/mnethost', get_string('host', 'mnet'));

        // shortcut - the rest is only for logged in users!
        if (!isloggedin() || isguestuser()) {
            return false;
        }

        if ($courses = get_my_remotecourses()) {
            $this->content->items[] = get_string('remotecourses','mnet');
            $this->content->icons[] = '';
            foreach ($courses as $course) {
                $this->content->items[]="<a title=\"" . format_string($course->shortname, true) . "\" ".
                    "href=\"{$CFG->wwwroot}/auth/mnet/jump.php?hostid={$course->hostid}&amp;wantsurl=/course/view.php?id={$course->remoteid}\">"
                    .$icon. format_string(get_course_display_name_for_list($course)) . "</a>";
            }
            // if we listed courses, we are done
            return true;
        }

        if ($hosts = get_my_remotehosts()) {
            $this->content->items[] = get_string('remotehosts', 'mnet');
            $this->content->icons[] = '';
            foreach($USER->mnet_foreign_host_array as $somehost) {
                $this->content->items[] = $somehost['count'].get_string('courseson','mnet').'<a title="'.$somehost['name'].'" href="'.$somehost['url'].'">'.$icon.$somehost['name'].'</a>';
            }
            // if we listed hosts, done
            return true;
        }

        return false;
    }

    /**
     * Returns the role that best describes the course list block.
     *
     * @return string
     */
    /*public function get_aria_role() {
        return 'navigation';
    }*/

    /**
     * Return the plugin config settings for external functions.
     *
     *
     //* @since Moodle 3.8
     */
    /*public function get_config_for_external() {
        global $CFG;

        // Return all settings for all users since it is safe (no private keys, etc..).
        $configs = (object) [
            'adminview' => $CFG->block_course_list_adminview,
            'hideallcourseslink' => $CFG->block_course_list_hideallcourseslink
        ];

        return (object) [
            'instance' => new stdClass(),
            'plugin' => $configs,
        ];
    }*/
}


