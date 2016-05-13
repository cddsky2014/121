<?php
	include("./head.php");
?>
<div class="list">
	<ul>
		<?php foreach($data as $v){
			extract($v);//将关联数组转化变量
		?>
		<li>
			<img src="./upload/<?php echo $thumb;?>" alt="">
			<span class="sprice">&yen;<?php echo $sprice;?></span>
			<span class="ptitle"><a href="./detail.php?pid=<?php echo $pid;?>"><?php echo $ptitle;?></a></span>
		</li>
		<?php }?>
		
	</ul>
</div>
<?php
	include("./foot.php");
?>