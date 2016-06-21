<?php

function smarty_modifier_color($string,$color){
	return "<span style='color:#{$color}'>{$string}</span>";
}