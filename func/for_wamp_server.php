<?php 
    require_once 'file_include.php';
    function connect_mysql($my_user_name){
        $con = mysqli_connect("localhost",$my_user_name, "shangzwszw12");
        if(!$con){
            die('Connect_failed!'.mysql_error());
        }
        return $con;
    }
    function select_db($my_db_name, $con){
        return mysqli_select_db($con, $my_db_name);
    }
    function my_query($sql, $con){
        return mysqli_query($con, $sql);
    }
    function my_fetch_array($var){
        return mysqli_fetch_array($var);
    }
?>