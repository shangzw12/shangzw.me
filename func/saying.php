<?php
	require_once 'file_include.php';
	$con = mysql_connect("localhost",$user_name,"shangzwszw12");
	if(!$con){
		die("connect failed\n" .mysql_error());
	}
	mysql_select_db($db_name,$con);	
	if(true){
		$sql = "SELECT * from $table_name where type = 'saying'";
		$saying = mysql_query($sql,$con);
		//echo $saying;
		while($row = mysql_fetch_array($saying,MYSQL_BOTH)){
            if ($row[type] == "saying")
			display_saying($row, $head_pic, $name);
        elseif ($row[type] == "passage") {
            # code...
        }
        elseif ($row[type] == "pic_saying") {
           
        }
	}
	}
?>