<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

include_once("top.php");

	$topico="$_GET[t]";
	$inc = "produtos/INC_".$topico.".php";
include($inc);




include_once("foot.php");
?>
