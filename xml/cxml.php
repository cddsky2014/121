<?php
$dom = new DOMDocument("1.0","utf-8");//设定文档类型
$student = $dom->createElement('student');//创建节点标签
$student->setAttribute('count',3); //设置节点属性
$student_text = $dom->createTextNode("文本内容");//创建文本节点
$student->appendChild($student_text);//将student_text节点作为子节点添加到student节点
$dom->appendChild($student);//将student节点作为根节点添加到dom文档
$dom->save('./cxml.xml');//生成并保存XML文件