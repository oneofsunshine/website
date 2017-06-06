<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
$mysqli = new mysqli('localhost','root','','food');
//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}
$sql = "insert into common (id, common) values (".$_POST['newid'].",'".$_POST['newcommon']."')";
$result = $mysqli->query($sql);
if(!$result)
	echo "<script>alert('评论失败!')</script>";
else 
	echo "<script>alert('评论成功!')</script>";
	
?>
<script>

window.location.href=document.referrer;
</script>

</body>
</html>