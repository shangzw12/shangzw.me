<!DOCTYPE html>
<html lang='zh-CN'>

<head>
	<meta charset="utf-8">
	<!-- icon -->
	<link href="icon/1.jpg" rel="shortcut icon">
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
			<div class='col-md-9'> <!--main content-->
				<?php require_once './func/saying.php'; ?>
			</div>
			<div class='col-md-3'> <!-- nav for list -->
				<?php require_once './func/list.php'?>
			</div>
		</div>
		<!-- this is the btm-->
		<footer class="bs-docs-footer" role="contentinfo">
			<div class="container ">
				<p align='center'>Posted by: shangzw</p>
				<p align='center'>Contact information: shangzw12@163.com </p>
			</div>
		</footer>
	</div>
</body>

</html>