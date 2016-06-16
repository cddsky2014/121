<?php
	set_time_limit(0);//设置脚本执行时间
	include("./phpmailer/PHPMailerAutoload.php");
	$mail = new PHPMailer;
		//邮件服务器信息配置
        $mail -> ISSMTP();  //设置邮件发送协议 smtp|pop3|imap
        $mail -> CharSet = "utf-8";  //设置邮件编码
		$mail->SMTPSecure = "ssl";  // SMTP 安全协议
        $mail -> Port = 465;          // 邮件端口
        $mail -> Host = "smtp.exmail.qq.com"; // 使用的邮件服务器
        $mail -> SMTPAuth = true;  //设置phpmail发送邮件是否需要验(username&password)
        if($mail -> SMTPAuth){
            $mail -> Username = "dongdong.chen@ganchi-software.com";
            $mail -> Password = $pwd;//密码  
        }
		$mail -> From = "dongdong.chen@ganchi-software.com";    //来源from
        $mail -> IsHTML(true); // 是否发送html邮件
        
		//$mail->AddAttachment('./email.txt','email.txt'); // 添加附件,并指定名称 

        //发送邮件信息
		$mail -> Addaddress('cddsky@qq.com'); // to
		$mail -> Subject = 'test123';   // subject
		$mail -> Body = 'ceshi123';    // content		
		if($mail->send()){
			return "Ok<br />";
		}else{
			echo $mail->ErrorInfo;
			return "No<br />";
		}
?>