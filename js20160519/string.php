<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>string</title>
</head>
<body>

	<script>
	/*
		//object
		//var str = "adefg";
		var arr=[1,2,3];
		//$arr=array(1,2,3);
		var arr = new Array(1,2,3);
		//document.write(typeof(arr));//var_dump();
		
		var str="abcde";
		var str= new String("abcdefg");

		var num = 123;
		var num = new Number("123");
		var fun = new Function();
	*/

	/*
		str.big()：大字号字体
		str.charAt(4)：返回指定位置的字符 返回的是第五个位置的字符(包括汉字)
		str.indexOf('a')：检索字符串位置
		str.concat("bye")：链接字符串 和+的功能一样
		str.fontcolor("red")：字体颜色
		str.fontsize（1-7）：字体大小
		str.link('地址')：设置为一个链接	
	*/

	var str = "abcdefg";
	//var str = new String("abcdefg");
	/*
	str={
		"big":function(){},
		"concat":function(){}
		"fontcolor":function(str,color){}
	}
	*/
	//document.write(str.fontcolor("red"));

	document.write(str.charAt(4));

	</script>
	
</body>
</html>