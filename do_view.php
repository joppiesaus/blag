<?php

function view($pid)
{
	$postdir = $_SERVER['DOCUMENT_ROOT'] . "/blag/p/" . $pid . "/";
	$postpath = $postdir . "index.html";
	
	
	// Check if post actually exists
	if (!file_exists($postdir))
	{
		return;
	}

	// Open the file, read the contents
	$f = fopen($postpath, "r");
	$content = fread($f, filesize($postpath));
	fclose($f);
	
	// display it
	// TODO: Make better
	echo '<div class="post_content">' . $content . '</div>';
}

?>