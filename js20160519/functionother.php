<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>扩展</title>
</head>
<body>
<script>
	var name="lucy";
	var fun = function(){document.write("fun");};
	var info={
		"name":name,
		"abc":function(){
			//document.write("fun");
			return 123;
		},
		"age":23
	};
	/*
		()的作用就是执行函数体内的代码
	*/
	//document.write(info["abc"]);
	//document.write(info.abc());

	/*
	a.b.c(); //hello
	a["b"]["c"];
	a["b"];
	*/
	var a={
			"b":{
				"age":23,
				"c":function(){return "hello";},
			},
			"name":"lucy",
			"say":function(){}
		};
	a.b.c();
	a.say();
	document.write(typeof(a));
</script>

</body>
</html>