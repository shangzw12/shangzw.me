<?php 
	require_once 'file_include.php';
	#$con = mysql_connect('localhost',$user_name,'shangzwszw12');
    $con = connect_mysql($user_name);
	if(!$con){
		die('Connect failed!\n'.mysql_error());
	}
	select_db($db_name, $con);
	//$search_time = _GET['time'];
    $search_time = "2016-03-01";
	// first day of a month
	$res = my_query("SELECT * from $table_name where creat_time >= timestamp('$search_time')
		and creat_time <= date_add(timestamp('$search_time'),interval 30 day)");
	while($row = my_fetch_array($res)){
		echo $row['content']; 
        echo "<br />";
	}
	mysql_close($con);	
?>