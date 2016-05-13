<?php
	include("../head.php");
	$cars = $_SESSION["car"];
?>
<table class="car" border="1px">
	<tr>
		<td>图片</td>
		<td>标题</td>
		<td>价格</td>
		<td>数量</td>
		<td>小计</td>
		<td>操作</td>
	</tr>
	<?php 
	$total=0;//保存总价
	foreach($cars as $v){
		//通过pid获取每个商品的详细信息
		foreach($data as $vo){
			if($vo["pid"]==$v["pid"]){
				$pcur = $vo;
				break;
			}
		}
		//小计
		$subtotal = $v["nums"]*$pcur["sprice"];
		//总价
		$total += $subtotal;
	?>
	<tr>
		<td><img width="80px" src="../upload/<?php echo $pcur["thumb"];?>" alt=""></td>
		<td><?php echo $pcur["ptitle"];?></td>
		<td><?php echo $pcur["sprice"];?></td>
		<td>
		<a href="./div_num.php?pid=<?php echo $pcur["pid"];?>">[-]</a>

		<?php echo $v["nums"];?>

		<a href="./add_num.php?pid=<?php echo $pcur["pid"];?>">[+]</a>
		</td>
		<td><?php echo $subtotal;?></td>
		<td><a href="./del_car.php?pid=<?php echo $pcur["pid"];?>">删除</a></td>
	</tr>
	<?php }?>

</table>

<a href="./del_all.php">清空购物车</a>

总价：<?php echo $total;?>


<?php

	include("../foot.php");
?>