<?php

header('Content-type: application/json');

//输出jsonp格式的数据
echo $_GET['jsoncallback']."({name:'lucy',age:23})";
