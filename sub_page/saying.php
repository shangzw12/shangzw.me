<?php
	require_once './func/file_include.php';
	#$con = mysql_connect("localhost",$user_name,"shangzwszw12");
    $con = connect_mysql($user_name);
	if(!$con){
		die("connect failed\n" .mysql_error());
	}
	select_db($db_name,$con);	
	if(true){
		$sql = "SELECT * from $table_name where type = 'saying' or type = 'pic_saying' order by creat_time DESC";
		$saying = my_query($sql,$con);
		//echo $saying;
		while($row = my_fetch_array($saying)){
            if ($row['type'] == "saying")
			    display_saying($row, $head_pic, $name);
            elseif ($row['type'] == "passage") {
                # code...
            }
            elseif ($row['type'] == "pic_saying") {
                display_pic_saying($row, $head_pic, $name);
            }
	    }
	}
?>