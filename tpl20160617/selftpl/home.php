<?php

$arr = array(1,2,3,4,5);

$tpl= file_get_contents('./tpl/home.html');//获取模版文件
//解析模版文件
$tpl = str_replace('{foreach $arr as $v}','<?php foreach($arr as $v){?>',$tpl);

$tpl =str_replace('{$v}','<?php echo $v;?>',$tpl);
$tpl =str_replace('{/foreach}','<?php }?>',$tpl);

file_put_contents('./runtime/home.php',$tpl);//生成PHP文件

include('./runtime/home.php');//引入执行



?>
