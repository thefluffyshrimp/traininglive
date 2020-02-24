<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'admin_training';
$CFG->dbuser    = 'admin_training';
$CFG->dbpass    = 'U8NBm7uqcF';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'https://miss.moe/training';
$CFG->dataroot  = '/home/admin/web/miss.moe/public_html/moodledata';
//$CFG->dataroot  = '/home/admin/web/miss.moe/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->defaultblocks_topics =  'rate_course,comments,qrcode';

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
