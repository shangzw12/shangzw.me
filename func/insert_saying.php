<?php
	//read in config info
	$ctn = $_POST['ctn'];
	$con = mysql_connect("localhost","root","shangzwszw12");
	if(!$con){
		die("connect failed!\n".mysql_error);
	}
	mysql_query("CREATE DATABASE if not exists 'test'");
	mysql_select_db("test");
	if(!mysql_query("SELECT * FROM saying")){
		mysql_query("CREATE table saying(
			editor varchar(100),
			content text(10000),
			like_num int(100)
		)");
	}
	if(!mysql_query("INSERT into saying value(
		'shangzw',$ctn,0
	)")){
		die("insert failed!\n".mysql_error);
	}
	mysql_close($con);	
?>