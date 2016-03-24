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
        $sql = "SELECT * from $table_name where type = 'saying' order by creat_time limit 1";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function get_first_passage($table_name, $con){
        $sql = "SELECT * from $table_name where type = 'passage' order by creat_time limit 1";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function get_first_pic_saying($table_name, $con){
        $sql = "SELECT * from $table_name where type = 'pic_saying' order by creat_time limit 1";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function display_saying($row, $head_pic, $name){
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
    }
    function display_pic_saying($row, $head_pic, $name){
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
            <img src='$row[pic_link]' height='300px' />
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
    }
    function display_passage($row, $head_pic, $name){
        echo  "
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
    }
    function insert_pic_saying($content, $url){
        $con = connect_mysql("blackpan_shangzw");
        mysql_select_db("blackpan_shangzw.me", $con);
        $sql = "insert into $table_name value('Shangzw','$content',0,199,default,'pic_saying','$url')";
        if(!mysql_query($sql, $con)){
            die("insert failed!".mysql_error());
        }
    }
?>