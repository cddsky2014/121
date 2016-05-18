<?php
include("./link.php");

if(isset($_GET["sid"])==false){
	exit("非法访问");
}

$sid = $_GET["sid"];
//获取当前记录的详细信息
$sql="select * from students where sid='{$sid}'";
$res = mysql_query($sql);
$cur = mysql_fetch_assoc($res);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑</title>
</head>
<body>
	<form action="./do_edit.php" method="post">
		<input type="hidden" value="<?php echo $sid;?>" name="sid"><br>
		姓名：<input type="text" name="sname" value="<?php echo $cur["sname"]; ?>"><br>
		年龄：<input type="text" name="age" value="<?php echo $cur["age"]; ?>" ><br>
		手机：<input type="text" name="tel" value="<?php echo $cur["tel"]; ?>" ><br>
		出生：<input type="text" name="birth" value="<?php echo $cur["birth"]; ?>" ><br>
		简介：<textarea name="intro"><?php echo $cur["intro"]; ?></textarea><br>

		性别：		
			<input <?php echo $cur["sex"]==0? "checked" :"";?> type="radio" name="sex" value="0">女
			<input <?php if($cur["sex"]==1){echo "checked";} ?> type="radio" name="sex" value="1">男
			<input <?php if($cur["sex"]==2){echo "checked";} ?> type="radio" name="sex" value="2">保密
		<br>
		<input type="submit" name="sub" value="修改"><br>
	
	</form>	
	
</body>
</html>