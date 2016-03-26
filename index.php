<!DOCTYPE html>
<html lang='zh-CN'>

<head>
	<meta charset="utf-8">
	<!-- icon -->
	<link href="icon/1.jpg" rel="shortcut icon">
	<?php require_once './for_include/js_css.php'; ?>
	<title>
		Welcome, My Friend！
	</title>
</head>

<body <?php require_once './func/bg.php'; echo $bg; ?>>
	<?php require_once './func/page_header.php'; echo $page_header;?>
    <?php require_once './func/file_include.php'; ?>
	<!-- 主体部分 -->
	<div class='container bs-docs-container' style="background-color:white;">
		<!-- 导航栏 -->
		<?php require_once './func/nav.php'; echo $nav ; ?>
		<!-- this is the pic -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="./material/2.jpg" width='100%'  alt="1" >
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<img src="./material/3.jpg" width='100%'  alt="2">
						<div class="carousel-caption">
							<!-- ...-->
						</div>
					</div>
					<div class="item">
						<img src="./material/1.jpg" width='100%'  alt="3">
						<div class="carousel-caption">
							<!-- ...-->
						</div>
					</div>
					<!--...-->
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
        <hr />
        <!-- this is the content -->
        <div class='row'>
            <div class='col-md-11 col-md-offset-1'>
                <h4>最近更新</h4>
            </div>
            <div class='col-md-11 col-md-offset-1'>
            <?php 
                require_once './func/file_include.php';
                $head_pic = './material/head_pic.jpg';
                $con = connect_mysql($user_name);
                mysql_select_db($db_name, $con);
                $row = get_first_saying($table_name, $con);
                display_saying($row, $head_pic, $name);
                $row = get_first_pic_saying($table_name, $con);
                display_pic_saying($row, $head_pic, $name);
                $row = get_first_passage($table_name, $con);
                display_passage($row, $head_pic, $name);
            ?>
            </div>
        </div>
		<?php require_once './func/page_btm.php'; ?>
	</div>
</body>

</html>