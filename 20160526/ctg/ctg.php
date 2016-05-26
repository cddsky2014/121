<?php
include("./core.php");
$ctgs = db_query("goods_ctg");
$ctgs=infinite_ctg($ctgs,array("0","fid","cid"));
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类</title>
</head>
<body>
<a href="./add.php">添加分类</a>
<table border=1>
	<tr>
		<td>cid</td>
		<td>cname</td>
		<td>fid</td>
		<td>操作</td>
	</tr>
	<?php foreach($ctgs as $v){?>
	<form action="./edit.php" method="post">
		<input name="cid" type="hidden" value="<?php echo $v["cid"]?>">
	<tr>
		<td><?php echo $v["cid"];?></td>
		<td><?php echo str_repeat("--",$v["level"])?>
		<input name="cname" type="text" value="<?php echo $v["cname"]?>">		
		</td>
		<td>
		
		<?php 
		/*
		<select name="ctg">
		echo "<option value='0'>顶级分类</option>";	
		foreach($ctgs as $v1){
			$cname=$v1['cname'];
			$cid=$v1['cid'];
			$fid=$v1['fid'];
			$level=$v1['level'];
			if($v["fid"]==$v1["cid"]){
				echo "<option value='{$cid}' selected >{$cname}</option>";
			}else{
				echo "<option value='{$cid}'>{$cname}</option>";
			}			
		}
		</select>
		*/
		echo infinite_select($ctgs,"ctg","cid","cname",$v["fid"]);	
		?>		
		</td>
		<td><input type="submit" value="保存">
			<a href="./del.php?cid=<?php echo $v["cid"];?>">删除</a>
		</td>
	</tr>
	</form>
	<?php }?>
</table>

	
	
</body>
</html>