<?php
	$path = "data.json";
	$json = file_get_contents($path);
	$array = json_decode($json,true);

	if(array_key_exists('data',$_GET)){
		$data = json_decode($_GET['data'],true);
		array.push($array,$data)
		file_put_contents($path,json_encode($array));
	}else{
		echo $json;
	}
?>
