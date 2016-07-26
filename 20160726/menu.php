<?php

$dsn = 'mysql:host=127.0.0.1;dbname=test;charset=utf8';

try{
	$pdo = new PDO($dsn,'root','');
}catch(Exception $e){//$e= new Exception();	
	echo '错误：'.$e->getMessage();	
}

$sth = $pdo->query('select * from ts_city where fid=0');

$pro = $sth->fetchAll();


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
省
<select id="pro" name="">
	<option value="">请选择</option>
	<?php foreach($pro as $v){?>
	<option value="<?php echo $v['cid']?>"><?php echo $v['cname'];?></option>
	<?php } ?>
</select>
市
<select id="city" name="">
	<option value="">请选择</option>
</select>

县/区
<select id="area" name="">
	<option value="">请选择</option>
</select>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
$(function(){

	$("#pro").change(function(){
		
		var id = $(this).find(":selected").val();

		$.get("./data.php?id="+id,function($res){
		
			$("#city").html($res);
		});

			
	});


	$("#city").change(function(){
		
		var id = $(this).find(":selected").val();

		$.get("./data.php?id="+id,function($res){
		
			$("#area").html($res);
		});			
	});

	

	

});


</script>
	
</body>
</html>
