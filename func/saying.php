<?php
	require_once './file_include.php';
	$con = mysql_connect("localhost",db_name,"shangzwszw12");
	if(!$con){
		die('connect failed' .mysql_error());
	}
	mysql_select_db("blackpan_shangzw.me",$con);	
	if(!mysql_fetch_row(mysql_query("SHOW TABLE LIKE 'saying'"))){
		$sql = "SELECT * from saying";
		$saying = mysql_query($sql,$con);
		while(mysql_fetch_array($saying)){
			echo "
	<div class='row'>
	<!-- head_pic-->
	<div class='col-md-3'>
		<img src=
		";
		echo $head_pic;
		echo "
		/>
	</div>
	<div class='col-md-3'>
		<h4>
		";
		echo $name;
		echo "		
		</h4>
	</div>
	<div class='col-md-6'>
		<p>something</p>
	</div>
	<!--content-->
	<div class='col-md-12'>
	";
	echo $saying['content'];
	echo "	
	</div>
	<!-- btm -->
	<div class='col-md-4'>
		<p>
		";
	echo $saying['time'];
	echo "</p>
	</div>
	<div class='col-md-4'>
		<p> ";
	echo "something";
	echo "</p>
	</div>
	<div class='col-md-4'>
		<p>";
	echo $saying['like_num'];
	echo "</p>
	</div>
	</div>";
	}
	}
?>