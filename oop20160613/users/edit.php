<?php
include('../DB.php');
$db = new DB;
$uid = $_GET['uid'];
$res = $db->query('ts_users','*',"uid='{$uid}'");
//print_r($res);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>编辑</title>       
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="row">
            <div class="col-xs-6">
                <form class="form-horizontal" action="./do_edit.php?uid=<?php echo $uid;?>" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">用户名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="uname" value="<?php echo $res[0]['uname'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email"  value="<?php echo $res[0]['email'];?>" >
                        </div>
                    </div>
                    
                          <div class="form-group">
                        <label class="col-sm-2 control-label">手机</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tel"  value="<?php echo $res[0]['tel'];?>" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" valude="修改">
                        </div>
                    </div>
                </form>  
            </div>
        </div>


    </body>
</html>
