<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>date</title>
</head>
<body>
<div id="date"></div>
<script>
/*
	var d=new Date()  先创建时间对象;          
	d.getHours()：获得当前的小时
	d.getMinutes():获得当前的分钟
	d.getSeconds():获得当前的秒数 
	d.getDay():获得当前星期的第几天(0-6)  //0是星期天
	d.getDate():得到当前的日期
	d.getFullYear():年份
	d.getMonth()：得到月份（0-11）
*/
var getDate = function(){
	var d = new Date();
	//2016年5月20日星期5
	var week = ["日","一","二","三","四","五","六"];
	var res = "";
	res += d.getFullYear()+"年";
	res += (d.getMonth()+1)+"月";
	res += d.getDate()+"日 ";
	res += d.getHours()+"时";
	res += d.getMinutes()+"分";
	res += d.getSeconds()+"秒";
	res += " 星期"+week[d.getDay()];
	document.getElementById("date").innerHTML=res;
};
setInterval(getDate,1000);
</script>
	
</body>
</html>