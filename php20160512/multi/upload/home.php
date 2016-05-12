<?php 
include("./head.php");
include("./link.php");

$ctg1 = mysql_query("select * from ctg where pid=0");//分类

/*
if(isset($_GET["cid"])==true){
	$cid = $_GET["cid"];
	$sql = "select * from product where p_cid=$cid";
}else{
	$sql = "select * from product";
}*/



$p=$_GET["p"];
$size = 2;
$start = ($p-1)*$size;
$sql = "select * from product limit $start,$size";// 1-1 *3 起始位置 = 页码-1 * 每页显示条数


$total_rows = mysql_num_rows(mysql_query("select * from product"));//总行数
$pages = ceil($total_rows/$size);//总页数

$p_list = mysql_query($sql);





?>

		<!--分类-->
		<div class="ctg">
			<ul>
				<?php while($row1 = mysql_fetch_assoc($ctg1)){?>
				<li class="ctg1"><a href=""><?php echo $row1["cname"];?></a>
					<ul class="ctg2">
						<?php 
						$pid = $row1["cid"];
						$ctg2 = mysql_query("select * from ctg where pid=$pid");
						while($row2 = mysql_fetch_assoc($ctg2)){
						?>
						<li><a href="./home.php?cid=<?php echo $row2["cid"];?>"><?php echo $row2["cname"];?></a></li>
						<?php }?>
					</ul>
				</li>
				<?php }?>
				
			</ul>		
		</div>

		<!--产品列表-->
		<div class="list">
			<ul>
				<?php while($row = mysql_fetch_assoc($p_list)){?>
				<li>
					<img width="180px" src="./upload/<?php echo $row["thumb"];?>" alt="">
					<div class="sprice">&yen;<?php echo $row["sprice"];?></div>
					<div><a href="./detail.php"><?php echo $row["pname"];?></a></div>
					<div>产地:<?php echo $row["addr"];?></div>
				</li>
				<?php }?>
				
			</ul>
		</div>

		<div class="clear"></div>
		
		<!--分页-->
		<div class="page">
			<ul>
				<li><a href="?p=1">&lt;&lt;</a></li>
				<li><a href="?p=<?php echo $p-1;?>">&lt;</a></li>
				
				<?php for($i=1;$i<=$pages;$i++){?>
				<li><a href="?p=<?php echo $i;?>"><?php echo $i;?></a></li>
				<?php }?>
				<li><a href="?p=<?php echo $p+1;?>">&gt;</a></li>
				<li><a href="?p=<?php echo $pages;?>">&gt;&gt;</a></li>
			</ul>
		</div>
		
<?php 
include("./foot.php");
?>
