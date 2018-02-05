<?php
$data = [];

array_push($data, ["id"=>rand()]);	
	
header('Access-Control-Allow-Origin: *');
echo json_encode($data);
