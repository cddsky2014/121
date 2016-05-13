<?php
	include("./head.php");
	if(isset($_GET["pid"])==false){
		exit("非法访问");
	}
	
	$detail = array();
	//获取某个商品的详细信息
	foreach($data as $v){
		if($v["pid"]==$_GET["pid"]){
			$detail = $v;
			break;
		}
	}
?>

<div>
	<img width="180px" src="./upload/<?php echo $detail["thumb"];?>" alt="">
	<ul>
		<li>价格：<?php echo $detail["sprice"];?></li>
		<li>标题：<?php echo $detail["ptitle"];?></li>
		<li><a href="./car/add_car.php?pid=<?php echo $_GET["pid"];?>"><b>加入购物车</b></a></li>
	</ul>

</div>


<?php
	include("./foot.php");
?>