<?php
include './Image.class.php';
include './Image/Driver/Gd.class.php';
include './Image/Driver/GIF.class.php';
include './Image/Driver/Imagick.class.php';

use Core\Image;
$image = new Image;

$image->open('./1.jpg');

echo $image->width();
$height = $image->height(); // 返回图片的高度
$type = $image->type(); // 返回图片的类型
$mime = $image->mime(); // 返回图片的mime类型
$size = $image->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度


