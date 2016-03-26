<?php 
    echo "
    <div class='row'>
        <textarea rows='5' cols='60' ></textarea>
        <form action='./func/upload_file.php' method='post' enctype='multipart/form-data' id='upload_file'>
            <label for='file'>Filename:</label>
            <input type='file' name='file' id='file' /> 
            <br />
        </form>
        <button class='btn-default' onclick='upload_file()'>发表</button>
    </div>
    ";
?>