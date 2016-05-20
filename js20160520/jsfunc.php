<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>函数</title>
</head>
<body>

<script>
	//str.indexOf();查某个字符在字符串中的位置
	//str.charAt(3);查某个位置的字符

	var str="abcdefg";
	str.indexOf("b");//1
	//str.concat("123")链接字符串
	str.concat("123");//"abcdefg"+"123"
	//str.fontsize设置字体大小范围1-7
	str.fontsize(7);
	//str.link('地址')
	//document.write(str.link("http://www.qq.com"));
	//str.replace(a,b) 替换字符串
	str.replace("d","的");
	//str.split(); 以某个分隔符将字符串分割为数组
	var str = "a-b-c-d-e";
	console.log(str.split("-"));//explode
	var str="abcdefg";
	//str.substr()
	//console.log(str.substr(4,3));
	//str.substring
	//console.log(str.substring(1,4));
	//console.log(str.length);
	console.log(String.fromCharCode(65,100));
	
	//	
	var arr = [1,2,3,4];
	console.log(arr.concat([4,5,6]));
	console.log(arr.reverse(arr));

	//splice(int(位置+-),int(长度,+),"添加的数组元素") 删除元素，并向数组添加新元素。 返回值是被删除的元素，可能为空

	var arr = [1,2,3,4];

	//console.log(arr.splice(2,1,["a","b"]));

	//console.log(arr);

	//console.log(arr.slice(0,2));

	console.log(arr.push(5));
	console.log(arr);





</script>
	
</body>
</html>