<?php 
	require_once './func/file_include.php';
	$con = mysql_connect('localhost',$user_name,'shangzwszw12');
	if(!$con){
		die('Connect failed!\n'.mysql_error());
	}
	mysql_select_db($db_name, $con);
	//$search_time = _GET['time'];
    $search_time = "2016-03-01";
	// first day of a month
	$res = mysql_query("SELECT * from $table_name where creat_time >= timestamp('$search_time')
		and creat_time <= date_add(timestamp('$search_time'),interval 30 day)");
	while($row = mysql_fetch_array($res)){
		echo $row['content']; 
        echo "<br />";
	}
	mysql_close($con);	
?>