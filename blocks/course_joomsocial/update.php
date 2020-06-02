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
 * Handles clicking of the submit button in the Course Ratings block.
 *
 * @package    block
 * @subpackage rate_course
 * @copyright  2009 Jenny Gray
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * Code was Rewritten for Moodle 2.X By Atar + Plus LTD for Comverse LTD.
 * @copyright &copy; 2011 Comverse LTD.
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once("../../config.php");

$courseids  = required_param('course', PARAM_INT);                 // Course Module ID.
$groupid     = required_param('id', PARAM_INT);          // User selection.


//print_r($courseid);
//die;
global $USER;
if ($form = data_submitted()) {

$groupcourses = $DB->get_records('block_course_joomsocial', array('groupid'=>$groupid));

foreach($courseids as $courseid){
    $courseids[]=$courseid;

if (! $course = $DB->get_record("course", array("id"=>$courseid))) {
    error("Course ID not found");
}

require_login($course, false);
if (!$context = context_course::instance($course->id)) {
    print_error('nocontext');
}
    if($groupcourses){
        foreach ($groupcourses as $groupcourse) {
        $groupcourseid[]=$groupcourse->courseid;
        if(!in_array($groupcourse->courseid, $courseids)){
            $DB->delete_records('block_course_joomsocial', array('id'=>$groupcourse->id));
        }
       }
        if(in_array($courseid, $groupcourseid)){
            $completion = new stdClass;
            $completion->id=$groupcourse->id;
            $completion->groupid = $groupcourse->groupid ;
            $completion->courseid = $courseid;
            $DB->update_record( 'block_course_joomsocial', $completion );
        } 

       else{
         $completion = new stdClass;
         $completion->courseid = $courseid;
         $completion->userid = $USER->id;
         $completion->groupid = $groupid ;
         $DB->insert_record( 'block_course_joomsocial', $completion );


       }
        
    }
    else{
         $completion = new stdClass;
         $completion->courseid = $courseid;
         $completion->userid = $USER->id;
         $completion->groupid = $groupid ;
         $DB->insert_record( 'block_course_joomsocial', $completion );
    }
    
} 
    echo $OUTPUT->notification('Update Successfully');
}
redirect('https://miss.moe/missmoesandbox/plc/plcgroups/viewgroup/'.$groupid);

