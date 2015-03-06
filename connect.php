<?php

session_start();

if(!defined('hidden')) {
   die('Direct access not permitted');
}

define('hidden', TRUE);


include("cred.php");

$link = mysql_connect($hostname, $username, $password);
mysql_set_charset("utf8", $link);
if (!$link) {
die('Connection failed: ' . mysql_error());
}
else{
"Connection to MySQL server " .$hostname . " successful!
" . PHP_EOL;
}

$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
die ('Can\'t select database: ' . mysql_error());
}
else {

}

//mysql_close($link);


$path = dirname(__FILE__);


include("functions.php");

?>