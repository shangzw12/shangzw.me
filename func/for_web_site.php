<?php 
    require_once 'file_include.php';
    function connect_mysql($my_user_name){
        $con = mysql_connect("localhost",$my_user_name, "shangzwszw12");
        if(!$con){
            die('Connect_failed!'.mysql_error());
        }
        return $con;
    }
    function select_db($db_name, $con){
        return mysql_select_db($db_name, $con);
    }
    function my_query($con, $sql){
        return mysql_query($sql, $con);
    }
    function my_fetch_array($var){
        return mysql_fetch_array($var);
    }
?>