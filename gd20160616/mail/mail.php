<?php
	set_time_limit(0);//设置脚本执行超时时间
	include("./phpmailer/PHPMailerAutoload.php");
	$mail = new PHPMailer;

		//邮件服务器信息配置
        $mail -> ISSMTP();  //设置邮件发送协议 smtp|pop3|imap
        $mail -> CharSet = "utf-8";  //设置邮件编码
		$mail->SMTPSecure = "ssl";  // SMTP 安全协议
        $mail -> Port = 465;          // 邮件端口
        $mail -> Host = "smtp.qq.com"; // 使用的邮件服务器

        $mail -> SMTPAuth = true;  //设置phpmail发送邮件是否需要验(username&password)
        if($mail -> SMTPAuth){
            $mail -> Username = "170483844@qq.com";
            $mail -> Password = '';//密码
        }
		$mail -> From = "cddsky@qq.com";    //来源from
        $mail -> IsHTML(true); // 是否发送html邮件
        
		//$mail->AddAttachment('./email.txt','email.txt'); // 添加附件,并指定名称 

        //发送邮件信息
		$mail -> Addaddress('cddsky@qq.com'); // 收件人
		$mail->FromName = 'King is me';//发送人姓名
		$mail -> Subject = '测试邮件';   // 标题
		$mail -> Body = '<b>测试邮件</b>';    // 内容		
		if($mail->send()){
			echo '发送成功';
		}else{
			echo $mail->ErrorInfo; 
		}
?>