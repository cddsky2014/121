<?php
namespace Aplication\Demo\Controller;
use \Core\DB;
class King extends DB{
    public function say(){
       $res =  $this->query('ts_users');
       include './Aplication/Demo/View/King/a.php';
    }
    public function code(){
        $code = new \Core\Verify;
        $code->fontSize = 30;
        $code->length   = 3;
        $code->useImgBg = true; 
        $code->useNoise = false;
        //$code->useZh = true; 
        $code->codeSet = '0123456789'; 
        $code->entry();
    }
    public function check(){
        echo I('get.id');
       // $code = new \Core\Verify;
        //var_dump($code->check('099'));        
        include './Aplication/Demo/View/King/a.php';
    }
    public function page(){
        //$page=new \Core\Page('100');
        $image = new \Core\Image;
        //$image->open('./1.jpg');
        //echo $width = $image->width(); // 返回图片的宽度
        //echo $height = $image->height(); // 返回图片的高度
        //echo $type = $image->type(); // 返回图片的类型
        //echo $mime = $image->mime(); // 返回图片的mime类型
        //print_r($image->size()); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
        
      
        $image->open('./1.jpg');
        //将图片裁剪为400x400并保存为corp.jpg
        //$image->thumb(150, 150,1)->save('./2.jpg');
        $image->open('./1.jpg')->text('ThinkPHP','./1.ttf',20,'#000000',  \Core\Image::IMAGE_WATER_SOUTHEAST)->save("new.jpg"); 
       
        include './Aplication/Demo/View/King/b.php';
    }
}