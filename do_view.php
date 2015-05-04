<?php

// Displays a post
function view($pid)
{
	$postdir = $_SERVER['DOCUMENT_ROOT'] . "/blag/p/" . $pid . "/";
	
	
	// Check if post actually exists
	if (!file_exists($postdir))
	{
		return;
	}

	// Open the file, read the contents
	require "blag.php";

	$content = getFileContents($postdir . "index.html");
	$post = json_decode(getFileContents($postdir . "post.json"), true);
	
	// Display it
	// TODO: Make better
	echo '<div class="post"><h1 class="post_title">' . $post["title"] . 
	'</h1><span class="post_date">'	. $post["date"] . 
	'</span><div class="post_content">' . $content . '</div></div>';
}

?>