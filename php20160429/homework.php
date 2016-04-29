<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>homework</title>
</head>
<body>

<?php
function get_max($v1,$v2,$v3,$v4){
	$max = "";
	if($v1>$v2 && $v1>$v3 && $v1>$v4){
		$max = $v1;	
	}elseif($v2>$v3 && $v2>$v4){
		$max = $v2;	
	}elseif($v3>$v4){
		$max = $v3;
	}else{
		$max = $v4;
	}
	return $max;
}

function print_table($row,$col,$style){
	$table = "";
	$table .= "<table style='{$style}'>";
	for($i=1;$i<=$row;$i++){
		$table .= "<tr>";
		for($j=1;$j<=$col;$j++){
			$table .= "<td>{$i},{$j}</td>";
		}
		$table .= "</tr>";
	}
	$table .= "</table>";
	return $table;
}

function multi_99($row,$style){
	$table = "";
	$table .= "<table style='{$style}'>";
	for($i=1;$i<=$row;$i++){
		$table .= "<tr>";
		for($j=1;$j<=$i;$j++){
			$table .= "<td>{$i},{$j}</td>";
		}
		$table .= "</tr>";
	}
	$table .= "</table>";
	return $table;
}
echo multi_99(20,"color:red;");
?>
	
</body>
</html>