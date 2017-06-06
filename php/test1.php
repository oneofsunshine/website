<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="test1.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php

//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('localhost','root','','food');
//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}
$sql = "select * from food where id =".$_GET['new'];
//执行sql语句，完全面向对象的
$result = $mysqli->query($sql);
echo "<div class='"."show' >";
while($row = $result->fetch_array()){
		echo  "<div class='"."img'".">"."<img class='"."chedan'"."src='".$row['href']."' />";
		echo "<div calss='"."desc' >"."名称:".$row['name']."</div>";
		echo "<div calss='"."desc' >"."价格:￥".$row['price']."</div>";
		echo "</div>";
		echo "</a>";
	//echo "</a>";
	//echo "<br>";
	//echo "<br>";
}
	$i=5;
	echo "<div class='"."common'>";
		echo "<form action='write.php' method='post'>";
		//echo "<form action='"."write.php"."’ method='"."post'>";
		echo "请输入您的评价:";
		//echo $_GET['new'];
		echo "<input type='"."text' name='"."newcommon'/>";
		echo "<input type='hidden' name='newid' value=".$_GET['new'].">";
		echo "<input type='"."submit'/>";
		echo "</form>";
	echo "</div>";
	$mysqli = new mysqli('localhost','root','','food');
	if (mysqli_connect_errno()){
		//注意mysqli_connect_error()新特性
		die('Unable to connect!'). mysqli_connect_error();
	}
	$sql = "select * from common where id =".$_GET['new'];
	//执行sql语句，完全面向对象的
	$result = $mysqli->query($sql);
	$j=1;
	while($row = $result->fetch_array()){
		echo "<div class='"."common'>";
		echo $j.":";
		echo "<p>".$row['common']."</p>";
		echo "</div>";
		$j++;
	}
echo "</div>";
?>
</body>
</html>
