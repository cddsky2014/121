<?php
include('../DB.php');
$db = new DB;
$res = $db->query('ts_users');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>用户表</title>
        <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>        
        <table class="table table-bordered">
            <tr>
                <td>用户名</td>
                <td>邮箱</td>
                <td>手机</td>
                <td>操作</td>
            </tr>
            <?php foreach($res as $v){?>
            <tr>
                <td><?php echo $v['uname'];?></td>
                <td><?php echo $v['email'];?></td>
                <td><?php echo $v['tel'];?></td>
                <td>
                    <span onclick="del(<?php echo $v['uid'];?>);" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-remove"> </i> 删除</span>
                    
                    <a href="./edit.php?uid=<?php echo $v['uid'];?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil"> </i> 编辑</a>
                </td>
            </tr>  
            <?php }?>
        </table>
        
        <script>
            function del(id){
                if(confirm('确定删除吗？')){
                    location.href='./del.php?uid='+id; 
                }               
            }
        </script>

    </body>
</html>
