<?php 
	$my_date = 60*(((int)(date('H'))+15)%24)+date('m');
	$total = 24*60; 
	$my_opacity = $my_date / $total;
	if($my_opacity < 0.5 ) $my_opacity = 0.5;
 ?>