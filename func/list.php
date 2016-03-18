<?php 
	require_once 'file_include.php';
	$con = mysql_connect('localhost',$user_name,'shangzwszw12');
	if(!$con) { die('Connect failed!\n').mysql_error;}
	mysql_select_db($db_name, $con);

	$sql = 'SELECT distinct date_format(date_sub(creat_time, interval dayofmonth(creat_time) - 1 day),"%Y-%m-%d")
	 from saying';
	//get 201x-xx-xx type date
	$res = mysql_query($sql , $con);
	while($one_time = mysql_fetch_array($res)){
		//选择当前时间点下的所有的东西
		echo $one_time[0];
		if($one_time[0] == "2016-03-01"){
			echo "right!\n";
		}
		$sql = "SELECT count(*) from saying where creat_time >= timestamp('$one_time[0]')";
		//$sql = 'SELECT count(*) from saying';
		$one_time_count = mysql_fetch_array(mysql_query($sql, $con));
		echo $one_time_count[0];
		//查询，返回计数
		echo 
		"
		<p><a href = 'search_one_time.php'>$one_time[0] ($one_time_count[0])</a></p>
		";
		echo "\n";		
	}
	
?>