<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>判断成绩</title>
</head>
<body>
	<?php	
	/*封装成绩的等级*/
	function jude_score($score){
		$res = "";//保存等级
		if($score<60 && $score>0){
			$res="下";
		}elseif($score<70 && $score>=60){
			$res="中";
		}elseif($score<80 && $score>=70){
			$res="良";
		}elseif($score<=100 && $score>=80){
			$res="优";
		}else{
			$res="未知";
		}
		return $res;
	}
	echo jude_score(60);

	?>
	
	
</body>
</html>