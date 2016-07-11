<?php
include('FileDownload.class.php');

$down = new FileDownload();

$down->download('1.mp4',true);//断点续传