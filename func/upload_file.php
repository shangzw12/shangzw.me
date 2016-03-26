<!DOCTYPE html>
<html lang='zh-CN'>
<body>
<?php
    require_once 'file_include.php';
if ($_FILES["file"]["error"] > 0){
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else{
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
  
  if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/pjpeg"))
        && ($_FILES["file"]["size"] < 2000000)) {
    if ($_FILES["file"]["error"] > 0){
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        }
    else {
            echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

        if (file_exists("upload/" . $_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "../upload/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "../upload/" . $_FILES["file"]["name"];
            insert_pic_saying("this is a test!","../upload/". $_FILES["file"]["name"],$user_name, $db_name, "Shangzw",$table_name);
        }
    }
  }
  else{
    echo "Invalid file";
  }
   $url="http://www.shangzw.me/my_page.php";
   echo "<script language=\"javascript\">";
   echo "location.href=\"$url\"";
   echo "</script>";
?>
</body>
</html>