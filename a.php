<?php			
$str = "Chinese中文汉字";

function u_strlen($str,$type=true){
	$i = 0;	
	if($type){//以字节为单位获取
		while(substr($str,$i,1)!==false){
			$i++;
		}
	}else{//以字符为单位获取
		while(mb_substr($str,$i,1)!==""){
			$i++;
		}
	}	
	return $i;
}
echo u_strlen($str);
echo u_strlen($str,false);

echo mb_strlen($str);