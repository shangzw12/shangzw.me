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
			echo "
		<hr />
		<div class='row'>
		<!-- head_pic-->
		<div class='col-md-1'>
			<img src=$head_pic; width='50px'; height='50px'/>
		</div>
		<div class='col-md-11'>
			<div class='row'>
				<div class = 'col-md-12'> <p> $name </p> </div>
				<div class = 'col-md-12'> <p style='color:grey;'> $row[type]--$row[creat_time] </p> </div>			
			</div>
		</div>
        <br />
		<!--content-->
		<div class='col-md-10 col-md-offset-1'>
			<p>$row[content]</p>
		</div>
		<!-- btm -->
		<div class='col-md-3'>
			<p> something </p>
		</div>
        <div class= 'col-md-3'>
            <p>分享</p>
        </div>
		<div class='col-md-3'>
			<p> 点赞数：$row[like_num] </p>
		</div>
		</div>";
        elseif ($row[type] == "passage") {
            # code...
        }
        elseif ($row[type] == "pic_saying") {
           
        }
	}
	}
?>