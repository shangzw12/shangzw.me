<?php 
    //以下函数都默认已经连接到相应数据库
    require_once 'file_include.php';
    function connect_mysql($user_name){
        $con = mysql_connect("localhost",$user_name, "shangzwszw12");
        if(!$con){
            die('Connect failed!'.mysql_error());
        }
        return $con;
    }
    function get_first_saying($table_name, $con){
        $sql = "SELECT * from $table_name where type = 'saying' order by creat_time DESC limit 1";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function get_first_passage($table_name, $con){
        $sql = "SELECT * from $table_name where type = 'passage' order by creat_time DESC limit 1";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function get_first_pic_saying($table_name, $con){
        $sql = "SELECT * from $table_name where type = 'pic_saying' order by creat_time DESC limit 1";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function display_comment_btm($row,$name){
        echo "
        <!-- btm -->
        <br />
        <div class='col-md-12'>
            <br />
        </div>
		<div class='col-md-3 col-md-offset-1 col-sm-3'>
            <p><a href='##'><span class='glyphicon glyphicon-scissors' aria-hidden='true'></span></a></p>
		</div>
        <div class= 'col-md-3 col-sm-3'>
            <p><a href='##'><span class='glyphicon glyphicon-share-alt' aria-hidden='true'></span></a></p>
        </div>
		<div class='col-md-3 col-sm-3'>
			<p> <a href='##'><span class='glyphicon glyphicon-heart-empty' aria-hidden='true'></span></a>_*$row[like_num] </p>
		</div>
        <div class='col-md-2 col-sm-2'>
			<p> <a href='##'><span class='glyphicon glyphicon-music' aria-hidden='true'></span></a>_*$row[like_num] </p>
		</div>
        ";
    }
    function display_saying($row, $head_pic, $name){
        echo "
		<hr />
		<div class='row'>
		<!-- head_pic-->
		<div class='col-md-1 col-sm-1'>
			<img src='$head_pic'; width='50px'; height='50px'/>
		</div>
		<div class='col-md-11 col-sm-11'>
			<div class='row'>
				<div class = 'col-md-12 col-sm-12'> <p><a href='##'> $name </a></p> </div>
				<div class = 'col-md-12 col-sm-12'> <p style='color:grey;'>->$row[creat_time] </p> </div>			
			</div>
		</div>
        <br />
		<!--content-->
		<div class='col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1'>
			<p>$row[content]</p>
		</div>";
        display_comment_btm($row, $name);
        echo "</div>";
    }
    
    function display_pic_saying($row, $head_pic, $name){
        echo "
		<hr />
		<div class='row'>
		<!-- head_pic-->
		<div class='col-md-1 col-sm-1'>
			<img src='$head_pic'; width='50px'; height='50px'/>
		</div>
		<div class='col-md-11 col-sm-11'>
			<div class='row'>
				<div class = 'col-md-12 col-sm-12'> <p><a href='##'> $name </a></p> </div>
				<div class = 'col-md-12 col-sm-12'> <p style='color:grey;'> ->$row[creat_time] </p> </div>			
			</div>
		</div>
        <br />
		<!--content-->
		<div class='col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1'>
			<p>$row[content]</p>
            <img src='$row[pic_link]' width='65%' />
		</div>";
        display_comment_btm($row,$name);
		echo "</div>";
    }
    function display_passage($row, $head_pic, $name){
        echo  "
		<hr />
		<div class='row'>
		<!-- head_pic-->
		<div class='col-md-1 col-sm-1'>
			<img src='$head_pic'; width='50px'; height='50px'/>
		</div>
		<div class='col-md-11 col-sm-11'>
			<div class='row'>
				<div class = 'col-md-12 col-sm-12'> <p><a href='##'> $name </a></p> </div>
				<div class = 'col-md-12 col-sm-12'> <p style='color:grey;'>->$row[creat_time] </p> </div>			
			</div>
		</div>
        <br />
		<!--content-->
		<div class='col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1'>
			<p>$row[content]</p>
		</div>";
		display_comment_btm($row,$name);
		echo "</div>";
    }
    function insert_pic_saying($content, $url, $user_name, $db_name, $editor, $table_name){
        $con = connect_mysql($user_name);
        mysql_select_db($db_name, $con);
        
        $sql = "insert into $table_name value ('$editor','$content',0,default,default,'pic_saying','$url')";
        if(!mysql_query($sql, $con)){
            die("insert failed!".mysql_error());
        }
    }
    function insert_saying($content, $user_name, $db_name, $editor, $table_name){
        $con = connect_mysql($user_name);
        mysql_select_db($db_name, $con);
        
        $sql = "insert into $table_name value ('$editor','$content',0,default,default,'saying','')";
        if(!mysql_query($sql, $con)){
            die("insert failed!".mysql_error());
        }
    }
?>