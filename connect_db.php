<?php
	$link =mysql_connect("localhost","root","sujey");
	if($link){
		mysql_select_db("academias",$link);
	}
?>