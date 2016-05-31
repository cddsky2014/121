<?php
	include("./link.php");
	$ctg1=mysql_query("select * from ts_goods_ctg where fid=0");

	$uname = isset($_SESSION["uname"])?$_SESSION["uname"]:"";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<style>
		*{margin:0;padding:0;list-style:none;}
		.ctg{}
		.ctg li{float:left;padding:5px;}
		.ctg_sub{display:none;position:absolute;background:#fff;}
		
		.ctg_down:hover .ctg_sub{display:block;}

		.clear{clear:both;}

		/*goods*/
		.goods li{border:1px solid red;float:left;width:180px;height:260px;margin:5px;}

		.goods img{width:180px;}

	</style>
</head>
<body style="padding-left:30px;">

<?php if(!empty($uname)){?>
	当前用户：<?php echo $uname;?>
	<a href="./car.php">我的购物车</a>
	<a href="./order.php">我的订单</a>
<?php }else{?>
	<a href="./login.php">登陆</a>
<?php }?>



<hr>

<ul class="ctg">
	<?php while($ctg1_row=mysql_fetch_assoc($ctg1)){
		$cid = $ctg1_row["cid"];
		$ctg2 = mysql_query("select * from ts_goods_ctg where fid={$cid}");
	?>
	<li class="ctg_down"><?php echo $ctg1_row["cname"];?>
		<ul class="ctg_sub">
			<?php while($ctg2_row=mysql_fetch_assoc($ctg2)){?>
			<li><a href="./home.php?ctg=<?php echo $ctg2_row["cid"];?>"><?php echo $ctg2_row["cname"];?></li>
			<?php }?></a>
		</ul>
	</li>
	<?php }?>
</ul>
<div class="clear"></div>


<?php

	if(isset($_GET["ctg"])==true && empty($_GET["ctg"])==false){
		$ctg = $_GET["ctg"];
		$where = "where ctg='{$ctg}'";
	}else{
		$ctg = "";
		$where = "where 1";
	}	

	if(isset($_GET["key"])==true){
		$key=$_GET["key"];
		$where .= " && pname like '%{$key}%'";
	}
//echo "select * from ts_goods {$where}";
	//获取分页记录的条数
	$total_rows = mysql_num_rows(mysql_query("select * from ts_goods {$where}"));
	$pages = ceil($total_rows/2);//总页数
	$p=isset($_GET["p"])==true?$_GET["p"]:1;//页码
	$start = ($p-1)*2; 
	$limit = "limit {$start},2";
	$goods = mysql_query("select * from ts_goods {$where} $limit");

?>
<form action="./home.php">
	<input type="hidden" name="p" value="<?php echo $p;?>">
	<input type="hidden" name="ctg" value="<?php echo $ctg;?>">	
	<input type="text" name="key">
	<input type="submit" value="搜索">
</form>
<ul class="goods">
	<?php while($row_g = mysql_fetch_assoc($goods)){ ?>
	<li>
		<img src="../upload/<?php echo $row_g["thumb"];?>" alt="">	
		<div>
			<a href="./detail.php?pid=<?php echo $row_g["pid"];?>"><?php echo $row_g["pname"];?></a>
		</div>
		<div>
			<?php echo $row_g["sprice"];?>
		</div>
	</li>
	<?php }?>

</ul>
<div class="clear"></div>
<?php 
	for($i=1;$i<=$pages;$i++){
		echo "<a href='./home.php?p={$i}&ctg={$ctg}'>$i</a> | ";
	}
?>	
</body>
</html>