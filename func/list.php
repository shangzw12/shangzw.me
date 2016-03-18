<?php 
	require_once 'file_include.php';
	$con = mysql_connect('localhost',$user_name,'shangzwszw12');
	if(!$con) { die('Connect failed!\n').mysql_error;}
	mysql_select_db($db_name, $con);

	$sql = 'SELECT distinct date_format(date_sub(creat_time, interval dayofmonth(creat_time) - 1 day),"%y-%m-%d")
	 from saying';
	//get 201x-xx-xx type date
	$res = mysql_query($sql , $con);
	while($one_time = mysql_fetch_array($res)){
		//选择当前时间点下的所有的东西
		echo $one_time;
		echo "\n";
		echo mysql_query('SELECT now()', $con);
		echo mysql_query('SELECT TIMESTAMP($one_time)',$con);
		$sql = 'SELECT count(*) from saying where creat_time >= timestamp($one_time) 
				and creat_time <= date_add(timestamp($one_time), interval 30 day)';
		//$sql = 'SELECT count(*) from saying';
		$one_time_count = mysql_query($sql, $con);
		//查询，返回计数
		echo 
		"
		<p><a href = 'search_one_time.php'>($one_time_count)</a></p>
		";
		echo "\n";		
	}
	
?>