<?php 
	require_once 'file_include.php';
	#$con = mysql_connect('localhost',$user_name,'shangzwszw12');
    $con = connect_msyql($user_name);
	if(!$con) { die('Connect failed!\n').mysql_error;}
	mysql_select_db($db_name, $con);
	$sql = "SELECT distinct date_format(date_sub(creat_time, interval dayofmonth(creat_time) - 1 day),'%Y-%m-%d')
	 from $table_name";
	//get 201x-xx-xx type date
	$res = mysql_query($sql , $con);
	while($one_time = mysql_fetch_array($res)){
		//选择当前时间点下的所有的东西
		$sql = "SELECT count(*) from $table_name where creat_time >= timestamp('$one_time[0]')
		and creat_time <= date_add(timestamp('$one_time[0]'),interval 30 day)";
		//$sql = 'SELECT count(*) from saying';
		$one_time_count = mysql_fetch_array(mysql_query($sql, $con));
        $my_time = substr($one_time[0],0,7);
		//查询，返回计数
		echo 
		"
		<p><a href = 'search_one_time.php?time = '$one_time[0]''>$my_time($one_time_count[0])</a></p>
		";
		echo "\n";
	}
	
?>