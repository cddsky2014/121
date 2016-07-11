<?php
// 告诉浏览器当前内容需要以PDF格式进行解析
header('Content-type: application/pdf');

// 告诉浏览器以附件的形式下载这个文件，设置文件名为downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

// 读取文件内容
readfile('c.pdf');