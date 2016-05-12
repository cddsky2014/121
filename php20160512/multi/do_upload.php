<?php
	header("content-type:text/html;charset=utf-8");
	
	//print_r($_FILES);

	for($i=0;$i<count($_FILES["file"]["name"]);$i++){
		$file_name = $_FILES["file"]["name"][$i];
		$tmp_name = $_FILES["file"]["tmp_name"][$i];
		//$error = $_FILES["file"]["error"][$i];
		//$size = $_FILES["file"]["size"][$i];

		move_uploaded_file($tmp_name,"./upload/$file_name");
	}

?>