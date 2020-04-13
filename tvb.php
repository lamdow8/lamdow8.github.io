<?php
$id=$_GET["id"];
$info=file_get_contents("http://news.tvb.com/live/$id"); 
preg_match('/<source src="(.*?)"/i',$info,$sn);
$playurl=$sn[1];
header('location:'.urldecode($playurl));
?>
