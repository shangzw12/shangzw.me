<!DOCTYPE html>
<html lang='zh-CN'>

<head>
	<meta charset="utf-8">
	<!-- icon -->
	<link href="icon/1.jpg" rel="shortcut icon">
	<?php require_once './for_include/js_css.php';?>
	<title>
		Welcome, My Friend！
	</title>
</head>

<body <?php require_once './func/bg.php'; echo $bg; ?>>
	<?php require_once './func/page_header.php'; echo $page_header;?>
	<!-- 主体部分 -->
	<div class='container bs-docs-container' style="background-color:white; ">
		<!-- 导航栏 -->
		<?php require_once './func/nav.php'; echo $nav ; ?>
		<!-- cotent-->
		<div class='row'>
			<div class='col-md-7 col-md-offset-1'> <!--main content-->
				<?php require_once './sub_page/insert_saying.php'; ?>
                <?php require_once './sub_page/insert_pic_saying.php'; ?>
                <?php require_once './sub_page/insert_passage.php'; ?>
			</div>
			<div class='col-md-3 col-md-offset-1'> <!-- nav for list -->
				<?php require_once './func/list.php'?>
			</div>
		</div>
		<!-- this is the btm-->
		<?php require_once './func/page_btm.php'; ?>
	</div>
</body>

</html>