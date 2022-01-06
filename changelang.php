<?php
session_start();
?>
<?php
	$language = 'en';
	$url = "https://fablab.ba/?page=pages/en/index";
	if($_GET['lang'] == 'bhs'){
	   	$_SESSION["lang"] = "bhs";
		$url = "https://fablab.ba/?page=pages/bhs/index";
	}
	else{
	   	$_SESSION["lang"] = "en";
	}
 	
	header("Location:".$url);
?> 
