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
	<div class='container bs-docs-container' style="background-color:white; opacity:0.5">
		<!-- 导航栏 -->
		<?php require_once './func/nav.php'; echo $nav ; ?>
		<!-- this is the pic -->
		<div class='container'>
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
						<img src="img\index22.jpg" width='1200px' height='500px' alt="1">
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<img src="img\index33.jpg" width='1200px' height='500px' alt="2">
						<div class="carousel-caption">
							<!-- ...-->
						</div>
					</div>
					<div class="item">
						<img src="img\index11.jpg" width='1200px' height='500px' alt="3">
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
		</div>
		
		<!-- this is the btm-->
		<footer class="bs-docs-footer" role="contentinfo">
			<div class="container ">
				<p align='center'> Posted by: shangzw</p>
				<p align='center'>Contact information: shangzw12@163.com </p>
			</div>
		</footer>
	</div>
</body>

</html>