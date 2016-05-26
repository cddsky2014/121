<?php 
/*无限分类*/
function infinite_ctg($cates,$fid=array("0","fid","cid"),$level=0){
	static $classes = array();
	// 让数据在递归中保持上次得到的结果
	foreach($cates as $vo){
		if($fid[0]== $vo[$fid[1]]){
			$vo["level"]=$level;
			$classes[]=$vo;
			infinite_ctg($cates,array($vo[$fid[2]],$fid[1],$fid[2]),$level+1);
		}		
	}
	return $classes;
}

/*无限分类下拉菜单*/
function infinite_select($data,$name,$value,$text,$fid=false){
	$html="<select name={$name}><option value=0>顶级菜单</option>";	
	foreach($data as $k=>$v){
		if($fid==$v[$value]){
			$html .= "<option value='".$v[$value]."' selected >".str_repeat("--",$v["level"]).$v[$text]."</option>"; 
			continue;
		}
		$html .= "<option value='".$v[$value]."'>".str_repeat("--",$v["level"]).$v[$text]."</option>"; 
	}
	$html .= "</select>";
	return $html;
}


?>