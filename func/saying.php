<?php
	$con = mysql_connect("localhost","blackpan_shangzw","shangzwszw12");
	if(!$con){
		die('connect failed' .mysql_error());
	}
	mysql_select_db("blackpan_shangzw.me",$con);
	if(!mysql_fetch_row(mysql_query("SHOW TABLE LIKE 'saying'"))){
		$sql = "SELECT * from saying";
		$saying = mysql_query($sql,$con);
		
	}
?>