<?php 
    require_once 'file_include.php';
    function connect_mysql($my_user_name){
        $con = mysql_connect("localhost",$my_user_name, "shangzwszw12");
        if(!$con){
            die('Connect_failed!'.mysql_error());
        }
        return $con;
    }
?>