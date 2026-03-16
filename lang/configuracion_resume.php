<?php

    session_start();


if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "ca";
else if (isset($_GET['lang'])        && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
	if ($_GET['lang'] == "ca")
		$_SESSION['lang'] = "ca";
	else if ($_GET['lang']  == "es")
        $_SESSION['lang'] = "es";
        else if ($_GET['lang']  == "en")
		$_SESSION['lang'] = "en";
}

require_once "resume_" .$_SESSION['lang']. ".php";


	
?>