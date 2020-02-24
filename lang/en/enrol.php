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
 * Strings for component 'core_enrol', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    core_enrol
 * @subpackage enroll
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actenrolshhdr'] = 'Available course Enrollment plugins';
$string['addinstance'] = 'Add method';
$string['addinstanceanother'] = 'Add method and create another';
$string['ajaxoneuserfound'] = '1 user found';
$string['ajaxxusersfound'] = '{$a} users found';
$string['ajaxxmoreusersfound'] = 'More than {$a} users found';
$string['ajaxnext25'] = 'Next 25...';
$string['assignnotpermitted'] = 'You do not have permission or can not assign roles in this course.';
$string['bulkuseroperation'] = 'Bulk user operation';
$string['configenrolplugins'] = 'Please select all required plugins and arrange then in appropriate order.';
$string['custominstancename'] = 'Custom instance name';
$string['defaultenrol'] = 'Add instance to new courses';
$string['defaultenrol_desc'] = 'It is possible to add this plugin to all new courses by default.';
$string['deleteinstanceconfirm'] = 'You are about to delete the Enrollment method "{$a->name}". All {$a->users} users currently enrolled using this method will be unenrolled and any course-related data such as users\' grades, group membership or forum subscriptions will be deleted.

Are you sure you want to continue?';
$string['deleteinstanceconfirmself'] = 'Are you really sure you want to delete instance "{$a->name}" that gives you access to this course? It is possible that you will not be able to access this course if you continue.';
$string['deleteinstancenousersconfirm'] = 'You are about to delete the Enrollment method "{$a->name}". Are you sure you want to continue?';
$string['disableinstanceconfirmself'] = 'Are you really sure you want to disable instance "{$a->name}" that gives you access to this course? It is possible that you will not be able to access this course if you continue.';
$string['durationdays'] = '{$a} days';
$string['editenrolment'] = 'Edit Enrollment';
$string['edituserenrolment'] = 'Edit {$a}\'s Enrollment';
$string['enroll'] = 'Enroll';
$string['enrolcandidates'] = 'Not enrolled users';
$string['enrolcandidatesmatching'] = 'Matching not enrolled users';
$string['enrolcohort'] = 'Enroll cohort';
$string['enrolcohortusers'] = 'Enroll users';
$string['enroldetails'] = 'Enrollment details';
$string['eventenrolinstancecreated'] = 'Enrollment instance created';
$string['eventenrolinstancedeleted'] = 'Enrollment instance deleted';
$string['eventenrolinstanceupdated'] = 'Enrollment instance updated';
$string['enrollednewusers'] = 'Successfully enrolled {$a} new users';
$string['enrolledusers'] = 'Enrolled users';
$string['enrolledusersmatching'] = 'Matching enrolled users';
$string['enrolme'] = 'Enroll Me in this Course';
$string['enrolmentinstances'] = 'Enrollment methods';
$string['enrolmentnew'] = 'New Enrollment in {$a}';
$string['enrolmentnewuser'] = '{$a->user} has enrolled in course "{$a->course}"';
$string['enrolmentmethod'] = 'Enrollment method';
$string['enrolments'] = 'Enrollments';
$string['enrolmentoptions'] = 'Enrollment options';
$string['enrolnotpermitted'] = 'You do not have permission or are not allowed to enroll someone in this course';
$string['enrolperiod'] = 'Enrollment duration';
$string['enrolusage'] = 'Instances / enrolments';
$string['enrolusers'] = 'Enroll users';
$string['enrolxusers'] = 'Enroll {$a} users';
$string['enroltimecreated'] = 'Enrollment created';
$string['enroltimeend'] = 'Enrollment ends';
$string['enroltimeendinvalid'] = 'Enrollment end date must be after the Enrollment start date';
$string['enroltimestart'] = 'Enrollment starts';
$string['errajaxfailedenrol'] = 'Failed to enroll user';
$string['errajaxsearch'] = 'Error when searching users';
$string['erroreditenrolment'] = 'An error occurred while trying to edit a users Enrollment';
$string['errorenrolcohort'] = 'Error creating cohort sync Enrollment instance in this course.';
$string['errorenrolcohortusers'] = 'Error enrolling cohort members in this course.';
$string['errorthresholdlow'] = 'Notification threshold must be at least 1 day.';
$string['errorwithbulkoperation'] = 'There was an error while processing your bulk Enrollment change.';
$string['eventuserenrolmentcreated'] = 'User enrolled in course';
$string['eventuserenrolmentdeleted'] = 'User unenrolled from course';
$string['eventuserenrolmentupdated'] = 'User unenrollment updated';
$string['expirynotify'] = 'Notify before Enrollment expires';
$string['expirynotify_help'] = 'This setting determines whether Enrollment expiry notification messages are sent.';
$string['expirynotifyall'] = 'Enroller and enrolled user';
$string['expirynotifyenroller'] = 'Enroller only';
$string['expirynotifyhour'] = 'Hour to send Enrollment expiry notifications';
$string['expirythreshold'] = 'Notification threshold';
$string['expirythreshold_help'] = 'How long before Enrollment expiry should users be notified?';
$string['finishenrollingusers'] = 'Finish enrolling users';
$string['foundxcohorts'] = 'Found {$a} cohorts';
$string['instanceadded'] = 'Method added';
$string['instanceeditselfwarning'] = 'Warning:';
$string['instanceeditselfwarningtext'] = 'You are enrolled into this course through this Enrollment method, changes may affect your access to this course.';
$string['invalidenrolinstance'] = 'Invalid Enrollment instance';
$string['invalidenrolduration'] = 'Invalid Enrollment duration';
$string['invalidrole'] = 'Invalid role';
$string['invalidrequest'] = 'Invalid request';
$string['manageenrols'] = 'Manage enroll plugins';
$string['manageinstance'] = 'Manage';
$string['migratetomanual'] = 'Migrate to manual enrolments';
$string['nochange'] = 'No change';
$string['noexistingparticipants'] = 'No existing participants';
$string['nogroup'] = 'No group';
$string['noguestaccess'] = 'Guests cannot access this course. Please log in.';
$string['none'] = 'None';
$string['notenrollable'] = 'You can not enroll yourself in this course.';
$string['notenrolledusers'] = 'Other users';
$string['otheruserdesc'] = 'The following users are not enrolled in this course but do have roles, inherited or assigned within it.';
$string['participationactive'] = 'Active';
$string['participationnotcurrent'] = 'Not current';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Suspended';
$string['periodend'] = 'until {$a}';
$string['periodnone'] = 'enrolled {$a}';
$string['periodstart'] = 'from {$a}';
$string['periodstartend'] = 'from {$a->start} until {$a->end}';
$string['proceedtocourse'] = 'Proceed to course content';
$string['recovergrades'] = 'Recover user\'s old grades if possible';
$string['rolefromthiscourse'] = '{$a->role} (Assigned in this course)';
$string['rolefrommetacourse'] = '{$a->role} (Inherited from parent course)';
$string['rolefromcategory'] = '{$a->role} (Inherited from course category)';
$string['rolefromsystem'] = '{$a->role} (Assigned at site level)';
$string['sendfromcoursecontact'] = 'From the course contact';
$string['sendfromkeyholder'] = 'From the key holder';
$string['sendfromnoreply'] = 'From the no-reply address';
$string['startdatetoday'] = 'Today';
$string['synced'] = 'Synced';
$string['testsettings'] = 'Test settings';
$string['testsettingsheading'] = 'Test enroll settings - {$a}';
$string['totalenrolledusers'] = '{$a} enrolled users';
$string['totalunenrolledusers'] = '{$a} unenrolled users';
$string['totalotherusers'] = '{$a} other users';
$string['unassignnotpermitted'] = 'You do not have permission to unassign roles in this course';
$string['unenrol'] = 'Unenrol';
$string['unenrolconfirm'] = 'Do you really want to unenrol "{$a->user}" (previously enrolled via "{$a->enrolinstancename}") from "{$a->course}"?';
$string['unenrolme'] = 'Unenrol me from {$a}';
$string['unenrolnotpermitted'] = 'You do not have permission or can not unenrol this user from this course.';
$string['unenrolroleusers'] = 'Unenrol users';
$string['uninstallmigrating'] = 'Migrating "{$a}" enrolments';
$string['unknowajaxaction'] = 'Unknown action requested';
$string['unlimitedduration'] = 'Unlimited';
$string['userremovedfromselectiona'] = 'User "{$a}" was removed from the selection.';
$string['usersearch'] = 'Search ';
$string['withselectedusers'] = 'With selected users';
$string['extremovedaction'] = 'External unenrol action';
$string['extremovedaction_help'] = 'Select action to carry out when user Enrollment disappears from external Enrollment source. Please note that some user data and settings are purged from course during course unenrollment.';
$string['extremovedsuspend'] = 'Disable course Enrollment';
$string['extremovedsuspendnoroles'] = 'Disable course Enrollment and remove roles';
$string['extremovedkeep'] = 'Keep user enrolled';
$string['extremovedunenrol'] = 'Unenrol user from course';
$string['privacy:metadata:user_enrolments'] = 'Enrollments';
$string['privacy:metadata:user_enrolments:enrolid'] = 'The instance of the Enrollment plugin';
$string['privacy:metadata:user_enrolments:modifierid'] = 'The ID of the user who last modified the user Enrollment';
$string['privacy:metadata:user_enrolments:status'] = 'The status of the user Enrollment in a course';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'The core enroll plugin stores enrolled users.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'The time when the user Enrollment was created';
$string['privacy:metadata:user_enrolments:timeend'] = 'The time when the user Enrollment ends';
$string['privacy:metadata:user_enrolments:timestart'] = 'The time when the user Enrollment starts';
$string['privacy:metadata:user_enrolments:timemodified'] = 'The time when the user Enrollment was modified';
$string['privacy:metadata:user_enrolments:userid'] = 'The ID of the user';
$string['youenrolledincourse'] = 'You are enrolled in the course.';
$string['youunenrolledfromcourse'] = 'You are unenrolled from the course "{$a}".';
