<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<script src ="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="http://192.168.34.13/jsonp/data.php"></script>	

<script>
$.getJSON("http://192.168.34.13/jsonp/data.php?abc=?", function(data) {
	console.log(data);
});

</script>
	
</body>
</html>