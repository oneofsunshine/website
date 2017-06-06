<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport"content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中国海洋大学餐饮系统</title>
<link href="test.css" rel="stylesheet" type="text/css" />
</head>

<body class="bodycss">
<center>
<div style="width:100%;height:100px;position:relative; ">
<img style="position:absolute; left:0px;top:0px;width:50%;height:100%;z-Index:-1; background-size:cover" src="Logo.png" />
</div>

</center>
<center>
<h3>北区</h3>
<hr />
<?php
	echo "<div"." id='"."main-content'"." class='"."story-pages'>";
			echo "<div"." id='"."content-left'"." class='"."full-content'>";
				echo "<span"." class='"."story-header-wrap'>";
					echo "<a"." class='"."button blue'"." href='"."food.php?ct= "."1"."' >";
					echo "<h3>一餐一楼</h3>";
					echo "</a>";	
				echo "</span>";
				echo "<span"." class='"."story-header-wrap'>";
					echo "<a"." class='"."button red'"." href='"."food.php?ct= "."2"."' >";
					echo "<h3>一餐二楼</h3>";
					echo "</a>";
				echo "</span>";
				echo "<span"." class='"."story-header-wrap'>";
				  	echo "<a"." class='"."button green'"." href='"."food.php?ct= "."3"."' >";
					echo "<h3>二餐一楼</h3>";
					echo "</a>";
				echo "</span>";
				echo "<span"." class='"."story-header-wrap'>";
				  	echo "<a"." class='"."button white'"." href='"."food.php?ct= "."4"."' >";
					echo "<h3>二餐二楼</h3>";
					echo "</a>";
				echo "</span>";
				echo "<span"." class='"."story-header-wrap'>";
				  	echo "<a"." class='"."button red'"." href='"."food.php?ct= "."5"."' >";
					echo "<h3>清真餐厅</h3>";
					echo "</a>";
				echo "</span>";
			echo "</div>";
		echo "</div>";
?>

</center>
</body>
</html>