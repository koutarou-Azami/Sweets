<?php
	$path = "Data.json";
	$data = file_get_contents($path);
	$json = json_decode($data,true);
	if(array_key_exists('data',$_GET)){
	$data = json_decode($_GET['data'],true);
	$json[] = [''=>,''=>]
	array.push($data,["id"=>$id])
	file_put_contents($path,$_GET['data'],FILE_APPEND);
	}else{
	$data = file_get_contents($path);
	echo json_encode($data);
	}

?>
