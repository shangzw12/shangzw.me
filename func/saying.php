<?php
	require_once 'file_include.php';
	$con = mysql_connect("localhost",$user_name,"shangzwszw12");
	if(!$con){
		die("connect failed\n" .mysql_error());
	}
	mysql_select_db($db_name,$con);	
	if(true){
		$sql = "SELECT * from saying";
		$saying = mysql_query($sql,$con);
		//echo $saying;
		while($row = mysql_fetch_array($saying,MYSQL_BOTH)){
			echo "
		</hr>
		<div class='row'>
		<!-- head_pic-->
		<div class='col-md-3'>
			<img src=$head_pic; width='50px'; height='50px'/>
		</div>
		<div class='col-md-9'>
			<div class='row'>
				<div class = 'col-md-12'> <p> $name </p> </div>
				<div class = 'col-md-12'> <p>something</p> </div>			
			</div>
		</div>
		<!--content-->
		<div class='col-md-12'>
			<p>$row[content]</p>
		</div>
		<!-- btm -->
		<div class='col-md-4'>
			<p>$row[time]</p>
		</div>
		<div class='col-md-4'>
			<p> something </p>
		</div>
		<div class='col-md-4'>
			<p> $row[like_num] </p>
		</div>
		</div>
		</hr>";
	}
	}
?>