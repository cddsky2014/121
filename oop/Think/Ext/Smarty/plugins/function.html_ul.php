<?php 
function smarty_function_html_ul($param){
	
	$info = $param['data'];
	
	$html = "<ul>";
	foreach($info as $v){
		$html .= "<li>{$v}</li>";
	}	
	$html .= '</ul>';

	return $html;

}