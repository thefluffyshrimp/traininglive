<?php
      // Display all the interfaces for importing data into a specific course
    require_once(__DIR__.'/../../config.php');
    global $CFG, $COURSE, $USER, $DB, $OUTPUT, $PAGE;
    $groupid = required_param('groupid', PARAM_INT);   // course id to import TO
    //$course = $DB->get_record('course', array('id'=>$id), '*', MUST_EXIST);
    $search    = optional_param('search', '', PARAM_RAW);
   
    
    require_login();
    $PAGE->set_context(context_system::instance());
    $page = 'Add Courses';
    $site = get_site();
    $heading = $site->fullname;
   // $PAGE->navbar->add($page);
    $PAGE->navbar->add($page);
  	$PAGE->set_pagelayout('report');
    
    $PAGE->set_url('/blocks/course_joomsocial/index.php', array('groupid' => $groupid));
  	$PAGE->set_title('Course List');
  	$PAGE->set_heading($title);
  	echo $OUTPUT->header();
      
      $searchform='<form id="" action="'.$CFG->wwwroot.'/blocks/course_joomsocial/index.php?groupid='.$groupid.'&" method="post"><fieldset class="coursesearchbox invisiblefieldset" id="yui_3_17_2_1_1470765375163_153"><label for="shortsearchbox" id="yui_3_17_2_1_1470765375163_154">Search courses: </label><input type="text" id="shortsearchbox" size="12" name="search" value=""><input type="submit" class="btn btn-primary" value="Go"></fieldset></form>';

      echo $searchform;
   
  if(!empty($search)){;
      //$countcat = $DB->get_record_sql('SELECT * FROM {course_categories} WHERE name LIKE ?' , array('%'.$search.'%'));
      /*$DB->get_records_sql('SELECT * FROM `mdl_course_categories` WHERE '.$DB->sql_like('name', ':name'), ['name' => '%'.$DB->sql_like_escape($search).'%']);*/
      $creater=$DB->get_record_sql('SELECT * FROM {user} WHERE firstname LIKE ? OR lastname LIKE ? OR username LIKE ?' , array('%'.$search.'%','%'.$search.'%','%'.$search.'%'));
      $creatorid=$creater->id;
        $countcat = $DB->get_records_sql('SELECT * FROM `mdl_course` where fullname LIKE ? OR summary LIKE ? OR created_by = ? AND category >0 GROUP BY category' ,array('%'.$search.'%','%'.$search.'%',$creatorid));
    }
    else{
      $countcat = $DB->get_records_sql('SELECT id, category,count(category) AS count FROM `mdl_course` where category >0 GROUP BY category');
    }
    
      $groupcourses = $DB->get_records('block_course_joomsocial', array('groupid'=>$groupid));
      foreach ($groupcourses as $groupcourse) {
        $groupcourseid[]=$groupcourse->courseid;
      }
      echo"<div class='form'>";
           echo'<form method="post" action="' . $CFG->wwwroot . '/blocks/course_joomsocial/update.php">
                     <p> <input name="id" type="hidden" value="' . $groupid . '" /></p>';
                  
            foreach ($countcat as $key => $value) {
                      if($value->category){
                       
                        $categoryname=$DB->get_record('course_categories', array('id' => $value->category));
                        $courses = $DB->get_records_sql('SELECT * FROM {course} WHERE category='.$value->category.' AND category > 0');
                      }
                      else{
                      
                        $categoryname=$DB->get_record('course_categories', array('id' => $value->id));
                        $courses = $DB->get_records_sql('SELECT * FROM {course} WHERE category='.$value->id.' AND category > 0');
                      }
                      if($courses){
                        echo '<h5>'.$categoryname->name.'</h5>';
                      }
                      
                      foreach($courses as $course) {
                           $coursename=$DB->get_record('course', array('id' => $course->id));
                           $creater=$DB->get_record('user', array('id' => $coursename->created_by));
                           $creatorname=$creater->firstname.' '.$creater->lastname;
                           if(in_array($course->id, $groupcourseid)){
                           echo '<input type="checkbox" name="course[]" value="' . $course->id . '" alt="Add of ' . $id_course . '" checked/><a href="'.$CFG->wwwroot.'/course/view.php?id='. $course->id.'" target="_blank">' .$coursename->fullname . '</a> '.' (Course Created By: '.'<a href="https://miss.moe/missmoesandbox/'.$creater->username.'" target="_blank">'.$creatorname.'</a>'.')<br>';
                           }
                           else{
                            echo '<input type="checkbox" name="course[]" value="' . $course->id . '" alt="Add of ' . $id_course . '"/><a href="'.$CFG->wwwroot.'/course/view.php?id='. $course->id.'" target="_blank">' .$coursename->fullname . '</a> '.' (Course Created By: '.'<a href="https://miss.moe/missmoesandbox/'.$creater->username.'" target="_blank">'.$creatorname.'</a>'.')<br>';
                           }
                    
                  } 
                  echo '<br>';
            }

       echo '<p><input type="submit" value="Submit" class="btn btn-primary"/></p></form> </div>';

    echo $OUTPUT->footer();

