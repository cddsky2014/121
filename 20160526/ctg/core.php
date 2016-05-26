<?php
/*
	定义数据库链接信息
*/
define("DB_HOST","127.0.0.1:3306");//服务器地址
define("DB_NAME","thinkshop");//数据名
define("DB_USER","root");//用户名
define("DB_PWD","");//密码
define("DB_PREFIX","ts_");//表前缀

/*过滤用户输入*/
function filter($str){
	if(is_array($str)){
		return $str;
	}
	$res = addslashes(strip_tags(trim($str)));
	return $res ? $res : false;
}

/*验证数据*/
function valid($input,$rule){
	$rule = explode("|",$rule);
	//获取限制的字符个数
	if(isset($rule[1])){
		$rule[1]=explode(",",$rule[1]);
		$rule[1][0]--;
		$rule[1][1]--;
		$rule[1] = implode(",",$rule[1]);
	}else{
		$rule[1]="5,17";
	}
	//正则表达式
	$types = array(
		"username"=>"/^[a-zA-Z]\w{".$rule[1]."}$/",
		"email"=>"/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/",
		"tel"=>"/^1[3|4|5|8|7]\d{9}$/",
	);
	return preg_match($types[$rule[0]],$input);
}

/*get获取数据*/
function get($input,$rule=""){
	if($rule){
		return isset($_GET[$input])&&valid($_GET[$input],$rule)?$_GET[$input]:false;
	}else{
		return isset($_GET[$input])?filter($_GET[$input]):false;
	}
}

/*post获取数据*/
function post($input,$rule=""){
	if($rule){
		return isset($_POST[$input])&&valid($_POST[$input],$rule)?$_POST[$input]:false;
	}else{
		return isset($_POST[$input])?filter($_POST[$input]):false;
	}
}
/*获取设置session*/
function session($key,$value=""){
	if($value){
		$_SESSION[$key]=$value;
	}else{
		return isset($_SESSION[$key])?$_SESSION[$key]:false;
	}
}

/*链接数据库*/
function db_link($host=DB_HOST,$user=DB_USER,$pwd=DB_PWD,$db=DB_NAME){
	//链接数据库
	$link = @mysql_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库链接失败！");
	//选择数据库
	@mysql_select_db(DB_NAME,$link) or die("数据库不存在");
	//设置字符集
	mysql_query("set names utf8");
	return $link;
}

/*数据查询*/
function db_query($table,$fields="*",$where=""){
	$table = DB_PREFIX.$table;//添加表前缀;
	$link = db_link();
	$sql = "select {$fields} from {$table}";
	if($where!=""){
		$sql .= " where {$where}";
	}
	$res = mysql_query($sql,$link) or die("查询失败！");
	$r = array();
	while($row=mysql_fetch_assoc($res)){
		$r[] = $row;
	}
	mysql_close($link);
	return $r;
}

function db_find($table,$fields="*",$where=""){
	$r = db_query($table,$fields,$where);
	return $r?$r[0]:false;
}

/*数据插入*/
function db_add($table,$data){	
	$table = DB_PREFIX.$table;//添加表前缀;
	$link = db_link();
	foreach($data as $k=>$v){
		$data[$k]="'{$v}'";//将所有的值加上引号
	}
	$fields = implode(",",array_keys($data));
	$values = implode(",",$data);	
	$sql = "insert into {$table}({$fields}) value($values)";
	$res = mysql_query($sql);
	$id = mysql_insert_id();
	mysql_close($link);
	return  $res ? $id:false;	
}

/*数据更新*/
function db_edit($table,$data,$where=""){
	$table = DB_PREFIX.$table;//添加表前缀;
	$link = db_link();
	foreach($data as $k=>$v){
		$data[$k]="{$k}='{$v}'";//将所有的值加上引号
	}
	$fields =  implode(",",$data);
	$where = $where ? "where {$where}":"";
	$sql = "update {$table} set {$fields} {$where}";
	$res = mysql_query($sql);
	mysql_close($link);
	return $res ? true : $sql;
}
/*删除用户*/
function db_del($table,$where){
	$table = DB_PREFIX.$table;//添加表前缀;
	$link = db_link();
	$where = $where ? "where {$where}":"";
	$sql = "delete from {$table} {$where}";
	return mysql_query($sql);
}


/*判断某个字段是否重复*/
function db_is_same($table,$value){
	return count(db_query($table,'*',"uname='{$value}'"));
}

/*获取当前的功能菜单*/

function get_cur_menu(){
	if(!$qstr = $_SERVER["QUERY_STRING"]){
		return;
	}
	
	$qstrs = explode("&",$qstr);
	$r=array();
	foreach($qstrs as $v){
		$vs = explode("=",$v);
		
		if($vs[0]=="c"){
			$r[0]=$v;
		}
		if($vs[0]=="a"){
			$r[1]=$v;
		}
	}
	rsort($r);
	$qstr = implode("&",$r);
	//根据url查询对应的菜单
	return $res = db_find("admin_menus","*","url='{$qstr}'");
	
}

/*面包屑导航*/
function breadcrumb(){
	
	//根据url查询对应的菜单
	if(!$res = get_cur_menu()){
		return;
	}
	//组织导航顺序开始
	$breadcrumbs[$res["mname"]]="";
	while($res = db_find("admin_menus","*","mid='".$res["fmid"]."'")){
		$breadcrumbs[$res["mname"]]=$res["url"]?"?".$res["url"]:"";
	}	
	$breadcrumbs["后台管理"]="./admin.php";
	$breadcrumbs = array_reverse($breadcrumbs,true);
	//组织导航顺序结束
	
	$html="<ol class='breadcrumb'>";				
	foreach($breadcrumbs as $k=>$v){
		$a = $v?"<a href='{$v}'>{$k}</a>":$k;
		$html .= "<li>$a</li>";
	}	
	$html .= "</ol>";
	return $html;
}

/*判断用户是否登陆*/
function is_login($key){
	return session($key);
}

/*提示错误信息*/
function msg($str,$url="",$flag=false){
	if($flag){
		header("location:{$url}");
		exit;
	}
	require_once(PATH."/view/header.html");	
	$url = $url?"<a href='$url'>返回</a>":"";
	echo $html="<div class='alert alert-success' role='alert'>{$str}{$url}</div>";
	require_once(PATH."/view/footer.html");
	exit;
}

/*无限分类*/
function infinite_ctg($cates,$fid=array("0","fid","cid"),$level=0){
	static $classes = array();
	// 让数据在递归中保持上次得到的结果
	foreach($cates as $vo){
		if($fid[0]== $vo[$fid[1]]){
			$vo["level"]=$level;
			$classes[]=$vo;
			infinite_ctg($cates,array($vo[$fid[2]],$fid[1],$fid[2]),$level+1);
		}		
	}
	return $classes;
}

function infinite_class2($cates,$fmid=0,$level=0){
	static $classes = array();
	// 让数据在递归中保持上次得到的结果
	foreach($cates as $vo){
		if($fmid== $vo["fmid"]){
			$vo["level"]=$level;
			$classes[]=$vo;
			infinite_class($cates,$vo['mid'],$level+1);
		}		
	}
	return $classes;
}

/*无限分类下拉菜单*/
function infinite_select($data,$name,$value,$text,$fid=false){
	$html="<select name={$name}><option value=0>顶级菜单</option>";	
	foreach($data as $k=>$v){
		if($fid==$v[$value]){
			$html .= "<option value='".$v[$value]."' selected >".str_repeat("--",$v["level"]).$v[$text]."</option>"; 
			continue;
		}
		$html .= "<option value='".$v[$value]."'>".str_repeat("--",$v["level"]).$v[$text]."</option>"; 
	}
	$html .= "</select>";
	return $html;
}
