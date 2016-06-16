<?php
include './Upload/Driver/Local.class.php';
include './Upload.class.php';



$upload = new Core\Upload();// 实例化上传类

$info   =   $upload->upload();
if(!$info) {// 上传错误提示错误信息
    $this->error($upload->getError());
}else{// 上传成功
    $this->success('上传成功！');
}