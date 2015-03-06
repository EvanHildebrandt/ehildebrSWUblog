<?php 
define('hidden', TRUE);
include("connect.php");



if($_POST["blog_id"] == ""){
 add_blog(htmlentities($_POST["blog"]), htmlentities($_POST["title"]));
}else{
	update_title($_POST["blog_id"], htmlentities($_POST["title"]));
	update_blog($_POST["blog_id"], htmlentities($_POST["blog"]));
}

header('Location: index.php');
?>