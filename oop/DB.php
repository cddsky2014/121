<?php

class DB {

    public function __construct($host = '127.0.0.1', $uname = 'root', $pwd = '', $dbname = 'thinkshop') {
        @mysql_connect($host, $uname, $pwd);
        mysql_select_db($dbname);
        mysql_query('set names utf8');
    }

    public function query($table, $fields = '*', $where = '1=1') {
        $sql = sprintf('select %s from %s where %s', $fields, $table, $where);
        $res = mysql_query($sql);
        $arr = array();
        while ($row = mysql_fetch_assoc($res)) {
            $arr[] = $row;
        }
        return $arr;
    }

    public function add($table,$data) {        
        $fields = '';
        $values = '';
        foreach($data as $k=>$v){
               $fields .= $k.','; 
               $values .='\''.$v.'\',';
        }
        $fields = rtrim($fields,',');
        $values = rtrim($values,',');        
        $sql = sprintf('insert into %s(%s) values(%s)',$table,$fields,$values);
        $res = mysql_query($sql);
        if ($res == true) {
            return mysql_insert_id();
        } else {
            return false;
        }
    }

}

$db = new DB;

$data = array(
    'uname'=>'tim',
    'pwd'=>md5(123),
    'email'=>'admin@qq.com',
    'tel'=>'1234567890',
    'ltime'=>time(),
    'ctime'=>time(),
    'photo'=>'1.jpg'
);
$db->add('ts_users',$data);
$r = $db->query('ts_users');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <table class="table table-bordered">
            <tr>
                <td>用户名</td>
                <td>email</td>
                <td>手机</td>
            </tr>
            <?php foreach ($r as $v) { ?>
                <tr>
                    <td><?php echo $v['uname']; ?></td>
                    <td><?php echo $v['email']; ?></td>
                    <td><?php echo $v['tel']; ?></td>
                </tr>
<?php } ?>
        </table>
        
        <button type="button" class="btn btn-default">注册</button>
        
        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-remove"></span>（成功）Success</button>
        
        
    </body>
</html>

