<?php

function view($pid)
{
	$postdir = $_SERVER['DOCUMENT_ROOT'] . "/blag/p/" . $pid . "/";
	$postpath = $postdir . "index.html";
	
	// Open the file, read the contents
	$f = fopen($postpath, "r");
	$content = fread($f, filesize($postpath));
	fclose($f);
	
	// display it
	// TODO: Make better
	echo $content;
}

?>