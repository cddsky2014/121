<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>valid</title>
</head>
<body>

	<form id="frm" action="./add.php" method="post">
		用户名：<input type="text" name="uname">
			<span id="uname">用户名必须填写</span><br>
		密码：<input type="password" name="pwd">
			<span id="pwd">密码不能为空</span><br>
		确认密码：<input type="password" name="pwd2">
			<span id="pwd2"></span><br>
		<input onclick="valid();" type="button" value="提交">
		<input type="submit" value="submit">

		<span onclick="valid();">提交</span>
		
	</form>
	<script>

	var valid = function(){		
		var uname = frm.uname.value;//获取表单控件值
		var unameTip=document.getElementById("uname");//获取元素对象（提示信息）
		if(/^[a-zA-z]\w{5,17}$/.test(uname)==false){
			unameTip.innerHTML="用户名非法";
			frm.uname.focus();//获取当前输入框的焦点
			return;
		}else{
			unameTip.innerHTML="用户名合法";
		}
		var pwd = frm.pwd.value;
		var pwdTip=document.getElementById("pwd");
		if(pwd==""){
			pwdTip.innerHTML="密码非法";
			frm.pwd.focus();
			return;
		}else{
			pwdTip.innerHTML="密码合法";
		}
		var pwd2 = frm.pwd2.value;
		var pwd2Tip=document.getElementById("pwd2");
		if(pwd!=pwd2){
			pwd2Tip.innerHTML="两次输入密码不一致";
			frm.pwd2.focus();
			return;
		}else{
			pwd2Tip.innerHTML="";
		}
		frm.submit();//提交表单
	};


	//var reg = new RegExp(正则表达式);
	/*
	reg = {
		"test":function(string){}
	}
	*/
	
	//var reg=new RegExp(/^[a-zA-z]\w{5,17}$/);
	//var reg=/^[a-zA-z]\w{5,17}$/;	
	//console.log(reg.test("2abcefg"));





		//window.onload=function(){};
	
	</script>
	
</body>
</html>