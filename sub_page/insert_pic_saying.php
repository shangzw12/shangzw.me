<?php 
    echo "
    <div class='row'>
    <div class='col-md-12 col-sm-12'>
        <form action='./func/upload_file.php' method='post' enctype='multipart/form-data' id='upload_file'>
            <p>说点什么</p>
            <hr />
            <input type='text' name='content' style='width:80%; height:100px;' id='content' />
            <input type='file' name='file' id='file' /> 
            <br />
        </form>
        <button class='btn-default' onclick='upload_file()'>发表</button>
    </div>
    </div>
    ";
?>