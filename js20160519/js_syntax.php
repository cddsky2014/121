<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>流程控制</title>
</head>
<body>

	<script>
	/*
		if(){}elseif(){}else{}
		switch(){case: break;}
		for(;;){}
		while(){}
		do{}while()
	*/
	var name = 120;
	if(name%2==0){
		document.write("偶数");
	}else{
		document.write("奇数");
	}	
	var date = "10-1";
	switch(date){
		case "10-1":
			document.write("国庆节");
			break;
		case "1-1":
			document.write("春节");
			break;	
		default:
			document.write("不知道");
			break;
	}
	
	var sum = 0;
	for(var i=1;i<=100;i++){
		sum += i;
	}
	document.write(sum);

	var sum = 0;
	var i=1;
	while(i<=100){
		sum += i;		
		i++;
	}
	document.write(sum);

	var sum = 0;
	var i=1;
	//var sum=0,i=1;
	do{
		sum += i;
		i++;
	}while(i<=100);
	document.write(sum);
	
	</script>
	
</body>
</html>