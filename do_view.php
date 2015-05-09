<?php

// Requires blag.php

// Displays a post
function view($pid)
{
	$postdir = BLAGPATH . "/p/" . $pid . "/";
	
	
	// Check if post actually exists
	if (!file_exists($postdir))
	{
		return;
	}

	// Open the file, read the contents
	$content = getFileContents($postdir . "index.html");
	$post = json_decode(getFileContents($postdir . "post.json"), true);
	
	// Display it
	// TODO: Make better
	echo '<div class="post"></span><h1 class="post_title"><a href="' 
	. 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] . '?id=' . $pid . '">' . 
	$post["title"] . 
	'</a></h1><div class="post_content">' . $content . '</div><div class="post_footer"><span class="post_love" id="iLoveThePost-' . $pid .'" onclick="lovePost(' . $pid . ')">'
	. $post["love"] .'</span><span class="post_date">' . dateToReadableString($post["date"]) . '</span></div></div>';
}

?>