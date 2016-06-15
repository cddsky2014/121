<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>用户列表</title>
    </head>
    <body>        
        <table border="1px">
            <tr>
                <td>用户名</td>
                <td>email</td>
                <td>手机</td>
                <td>操作</td>
            </tr>
            <?php foreach($res as $v){?>
             <tr>
                <td><?php echo $v['uname'];?></td>
                <td><?php echo $v['email'];?></td>
                <td><?php echo $v['tel'];?></td>
                <td><a href="./home.php?m=Admin&c=index&a=delete&uid=<?php echo $v['uid'];?>">删除</a></td>
            </tr>
            <?php }?>
        </table>

    </body>
</html>