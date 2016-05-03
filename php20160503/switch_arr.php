<?php
header("content-type:text/html;charset=utf-8");
	function holiday($holiday){
		switch($holiday){
			case "5-1":
				echo "劳动节";
				break;
			case "6-1":
				echo "儿童节";
				break;
			case "10-1":
				echo "国庆节";
				break;
			default:
				echo "未知";
				break;
		}
	}
	holiday("7-1");

	
	function holiday2($date){
		$holiday = array(
			"5-1"=>"劳动节",
			"6-1"=>"儿童节",
			"4-1"=>"愚人节",
			"10-1"=>"国庆节",
		);
		if(array_key_exists($date,$holiday)==true){
			echo $holiday[$date];
		}else{
			echo "未知";
		}		
	}
	holiday2("8-1");


?>