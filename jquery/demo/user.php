<?php
//$pdo = new PDO('mysql:dbname=advmysql;host=127.0.0.1','root','');
$link = @mysql_connect('127.0.0.1','root','');

mysql_select_db('advmysql');

mysql_query('set names utf8');

$res = mysql_query('select * from ts_students');

$users = array();

while($row = mysql_fetch_assoc($res)){
	$users[] = $row;
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<table class="tbl" border=1>
		<tr>
			<td>姓名</td>
			<td>年龄</td>
			<td>sex</td>
			<td>操作</td>
		</tr>
		<?php foreach($users as $v){?>
		<tr>
			<td><?php echo $v['sname'];?></td>
			<td><?php echo $v['age'];?></td>
			<td><?php echo $v['sex'];?></td>
			<td></td>
		</tr>
		<?php }?>	
	</table>

	
	姓名：<input type="text" name="sname"><br>
	年龄：<input type="text" name="age"><br>
	性别：<input type="text" name="sex"><br>

	<input name="add" type="button" value="添加"><br>

	<script src="../jquery-3.0.0.min.js"></script>

	<script>

	$('[name=add]').click(function(){		
		var data= {
			sname:$('[name=sname]').val(),
			age:$('[name=age]').val(),
			sex:$('[name=sex]').val()
		};
		$.post('./add.php',data,function(res){
			alert(res)
			tr = '<tr><td>'+data.sname+'</td><td>'+data.age+'</td><td></td><td>'+data.sex+'</td></tr>';
			$('.tbl').append(tr);
			//location.reload();
			
		});
		
	});
		
	
	</script>


	
</body>
</html>

