<?php include("./head.php");?>
<!--面包屑导航-->
<div class="hb_nav">
	当前位置：
	<a href="">首页</a>&gt; 
	<a href="">商城</a>&gt;
	产品
</div>

<table class="car">
	<tr>
		<th>图片</th>
		<th>名称</th>
		<th>价格</th>
		<th>数量</th>
		<th>小计</th>
		<th>操作</th>
	</tr>
	<tr>
		<td><img src="./upload/2.jpg" width="80px" alt=""></td>
		<td>商品名称</td>
		<td>&yen;100.00</td>		
		<td>
			<div class="car_num">
				<span><a href="">-</a></span>
				<span>&nbsp;&nbsp;7&nbsp;&nbsp;</span>
				<span><a href="">+</a></span>
			</div>
			
		</td>
		<td>&yen;100.00</td>
		<td><a href="">删除</a></td>
	</tr>

	<tr>
		<td colspan=6>
			<span class="car_clr"><a href="">清空购物车</a></span>
			<span class="car_total sprice">总价：&yen;100.00 </span>		
		</td>
	</tr>
</table>
<div class="car_pay">	
	<a href="">去结算</a>
	<a href="">继续购物</a>
</div>





<?php include("./foot.php");?>