<?php 
define('hidden', TRUE);
include("connect.php");

$title = mysql_real_escape_string($_POST["title"]);
$blog = mysql_real_escape_string($_POST["blog"]);
if($_POST["blog_id"] == ""){
 add_blog($blog, $title);
}else{
	update_title($_POST["blog_id"], $title);
	update_blog($_POST["blog_id"], $blog);
}

header('Location: index.php');
?>