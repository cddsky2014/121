<?php
include './Image.class.php';
include './Image/Driver/Gd.class.php';
include './Image/Driver/GIF.class.php';
include './Image/Driver/Imagick.class.php';

use Core\Image;
$image = new Image;


/*
$image->width();
$height = $image->height(); // 返回图片的高度
$type = $image->type(); // 返回图片的类型
$mime = $image->mime(); // 返回图片的mime类型
$size = $image->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
*/

//将图片裁剪为400x400并保存为corp.jpg
//$image->crop(400, 400,100,100);
//$image->thumb(100,300,6);

//$image->water('./crop3.jpg',1,100);
$image->open('./1.jpg');
$image->text('I am you de fans','./1.ttf','30','#ff0000',1);
$image->save('./crop6.jpg');

//$image->open('./1.jpg')->text('I am you de fans','./1.ttf','30','#ff0000',1)->save('./crop6.jpg');
