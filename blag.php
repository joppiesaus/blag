<?php

// Assumes the file exists!

function getFileContents($url)
{
	$f = fopen($url, "r");
	$content = fread($f, filesize($url));
	fclose($f);
	return $content;
}

function saveFileContents($url, $content)
{
	$f = fopen($url, "w");
	fwrite($f, $content);
	fclose($f);
}

?>