<?php
	header("Content-type: text/html;charset=utf-8");
	$con = mysql_connect('localhost','root','shangzwszw12');
	mysql_query("set character set 'GBK'");
	if(!$con){
		die('connect failed!'.mysql_error);
	}
	else{
		echo "connect successfully! \n";
	}
	mysql_select_db('test',$con);
	$sql="SELECT * from saying";
	$res=mysql_query($sql);
	while($row = mysql_fetch_array($res)){
		echo $row['editor'];
		echo "\n";
	}
?>