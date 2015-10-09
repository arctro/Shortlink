<?php
	$mysql_host = "";
	$mysql_database = "";
	$mysql_user = "";
	$mysql_password = "";

	//Conection
	$link=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database) or die("Error " . mysqli_error($link));
	
	//If no shortlink is specified
	if($_GET['l']=="" || is_null($_GET['l'])){
		header('Location: DEFAULT_PAGE');
		die();
	}
	
	//Convert shortlink to id
	$id = hexdec($_GET['l']) - 100000;
	$sql = "SELECT * FROM `short` WHERE `id` = '". $id ."'";
	
	$results = mysqli_query($link, $sql);
	$return = mysqli_fetch_assoc($results);
	
	//Go to link
	header('Location: ' . $return['link']);
?>