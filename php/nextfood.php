<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="test.css"
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第一餐厅</title>
<link href="test.css" rel="stylesheet" type="text/css" />
</head>

<body class="bodycss">
<h1>第一餐厅</h1>
<?php
//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('localhost','root','','food');
//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}
$i = $_GET['newi'];
$page = $_GET['newpage']+1;
$sql = "select * from food where id >= ".$i."";
//执行sql语句，完全面向对象的
$result = $mysqli->query($sql);
echo "<div class='"."show' >";
while($row = $result->fetch_array()){
		echo "<a"." href='"."test1.php?new=".$row['id']."' >";
		echo  "<div class='"."img'".">"."<img class='"."chedan'"."src='".$row['href']."' />";
		echo "<div calss='"."desc' >"."名称:".$row['name']."</div>";
		echo "<div calss='"."desc' >"."价格:￥".$row['price']."</div>";
		echo "</div>";
		echo "</a>";
		$i++;
		if($i%8==1)
			break;
	//echo "</a>";
	//echo "<br>";
	//echo "<br>";
}
echo "</div>";
echo '<div class="show"';
echo '<a href="nextfood.php?newi='.$i.'&newpage='.$page.'>';
echo '<div class="text">';
echo '下一页';
echo '</div>';
echo '</a>';
echo '</div>';
//echo '1';
?>
</body>
</html>
