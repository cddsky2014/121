<?php
    //定义文件路径
    $file_url = './a.php';
    //定义ftp上传路径，格式："ftp://用户名:密码@域名:端口号/文件路径"
    $ftp_url = 'ftp://thinksite:123@192.168.34.29:21/test.php';
    //初始化会话
    $ch = curl_init();
    //设置请求地址
    curl_setopt($ch, CURLOPT_URL, $ftp_url);
    //启用后允许文件上传。
    curl_setopt($ch, CURLOPT_UPLOAD, 1);
    //读取文件资源
    curl_setopt($ch, CURLOPT_INFILE, fopen($file_url, 'r'));
    //设定上传文件的大小限制，字节(byte)为单位。
    curl_setopt($ch, CURLOPT_INFILESIZE, filesize($file_url));
    //发送请求
    curl_exec ($ch);
    //关闭会话
    curl_close ($ch);
?>