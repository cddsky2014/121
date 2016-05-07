<?php
$f = fopen("./file.txt","r");
/*
	fgetc($f)逐字读取文件内容，读取当前指针所指的字符，并将指针移动到下个字符

echo fgetc($f);//a  ->b
echo fgetc($f);//b  ->c
echo fgetc($f);//c  ->d
echo fgetc($f);//d  ->e
echo fgetc($f);//e  ->f
echo fgetc($f);//f  ->g
echo fgetc($f);//g  ->null
var_dump(fgetc($f));

while(true){
	$chr = fgetc($f);
	if($chr===false){
		break;
	}else{
		echo $chr;
	}
}*/
/*
	feof(资源型);判断当前文件指针是否移动到文件末尾

while(!feof($f)){
	echo fgetc($f);
}*/
//abcdefg
while($chr=fgetc($f)){
	echo $chr;
}
fclose($f);

?>