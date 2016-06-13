<?php

class DB {
    public function __construct($host = '127.0.0.1', $uname = 'root', $pwd = '', $dbname = 'thinkshop') {
        @mysql_connect($host, $uname, $pwd);
        mysql_select_db($dbname);
        mysql_query('set names utf8');
    }
    public function query($table,$fields='*',$where='1=1') {
        $sql = sprintf('select %s from %s where %s',$fields,$table,$where); 
        $res = mysql_query($sql);
        $arr = array();
        while ($row = mysql_fetch_assoc($res)) {
            $arr[] = $row;
        }
        return $arr;
    }

}

$db = new DB('localhost');
$r = $db->query('ts_users','*','uname="lili"');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <table border="1px">
            <tr>
                <td>用户名</td>
                <td>email</td>
                <td>手机</td>
            </tr>
            <?php foreach($r as $v){?>
            <tr>
                <td><?php echo $v['uname'];?></td>
                <td><?php echo $v['email'];?></td>
                <td><?php echo $v['tel'];?></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>

