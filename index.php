<?php
session_start();
?>
<?php include 'pages/bhs/header.php'; ?>
<?php include 'pages/en/header.php'; ?>
<?php
	$language = $_SESSION["lang"];
	if(isset($_GET['page'])) {
		if(strpos($_GET['page'],'bhs')){
			$language = 'bhs';
			$_SESSION["lang"] = 'bhs';
		}else{
			$language = 'en';
			$_SESSION["lang"] = 'en';
		}
	}
	if(empty($language)){
		$language="en";
	}
	if($language == 'bhs'){
	   	$directory = 'pages/bhs';
	}
	else{
	   	$directory = 'pages/en';
	}

	$whitelist = array_map(function ($file) use ($directory) {
	return "$directory/$file";
	}, array_diff(scandir($directory), array('..', '.')));
	if(!isset($_GET['page'])) {
	$page = "pages/$language/landing";
					

	} else {
	$page = $_GET['page'];
	}
	
	$file = $page.".php";
	$lan='bhs';
	//if(strpos($page,$lan)){
		//$temp=$_GET['page']; echo $temp;}
	if(in_array($file, $whitelist) && file_exists($file)){
		
	include($file);
	} else {
	echo "The site is not found!";
	}
?> 


