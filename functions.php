<?php 

if(!defined('hidden')) {
   die('Direct access not permitted');
}

function add_blog($blog, $title){
	mysql_query("INSERT INTO `blogs`(`blog`, `title`) VALUES ('{$blog}','{$title}')") or die(mysql_error());
}

function update_blog($blog_id, $blog){
	mysql_query("UPDATE `blogs` SET `blog`='{$blog}' WHERE `blog_id`='{$blog_id}'") or die(mysql_error());
}

function update_title($blog_id, $title){
	mysql_query("UPDATE `blogs` SET `title`='{$title}' WHERE `blog_id`='{$blog_id}'") or die(mysql_error());
}


function get_blog($blog_id){
	$total = mysql_query("SELECT * FROM `blogs` WHERE `blog_id` = '{$blog_id}'") or die(mysql_error());
	$total = mysql_fetch_array($total);
	return $total;
}

function find_blogs(){
	$total = mysql_query("SELECT * FROM `blogs`") or die(mysql_error());
	return $total;
}

?>