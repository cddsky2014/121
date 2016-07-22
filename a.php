	<?php

		function u_str_pad($input,$pad_length,$pad_string){
			//计算输入字符串的长度
			$strlen = strlen($input);
			
			$i=0;
			//循环拼接字符串
			for($i = 0; $i<$pad_length; $i++){
				$input .= $pad_string;
			}
			//截取需要的位数
			return mb_substr($input,0,$pad_length);
		}

		//echo u_str_pad("Chinese中文汉字","20","语言");

		//string str_repeat ( string $input , int $multiplier )

		
		function u_str_repeat($input,$multiplier){
			$res = "";//保存输出的字符
			for($i=0;$i<=$multiplier;$i++){
				$res .= $input;
			}
			return $res;
		}

		//strrev ( string $string )
		

		function u_strrev($str){
			$res = "";//保存字符
			$i = -1;
			while(($i*-1)<=strlen($str)){
				//在$i的绝对值小于等于字符串长度的时候从后向前截取
				$res .= mb_substr($str,$i,1);
				$i--;
			}	
			return $res;
		}

		echo u_strrev("abcdefg中文");

		//var_dump(mb_substr("abc",-5,1));
	?>	