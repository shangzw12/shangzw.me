<?php 
    //以下函数都默认已经连接到相应数据库
    require_once 'file_include.php';
    function get_first_saying($table_name, $con){
        $sql = "SELECT * from $table_name limit 1 order by creat_time where type = saying";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function get_first_passage($table_name, $con){
        $sql = "SELECT * from $table_name limit 1 order by creat_time where type = passages";
        $res = mysql_query($sql, $con);
        $res = mysql_fetch_array($res);
        return $res;
    }
    function get_first_pic_saying($table_name, $con){
        $sql = "SELECT * from $table_name limit 1 order by creat_time where type = pic_saying";
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
?>