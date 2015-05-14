<?php
// Requires blag.php
require "datehelper.php";

// Displays a post
function view($id)
{
	$post = getPost($id)->content;

	// Display it
	// TODO: Make better
	echo '<div class="post"></span><h1 class="post_title"><a href="' 
	. 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] . '?id=' . $id . '">' . 
	$post["title"] . 
	'</a></h1><div class="post_content">' . $post["content"] . '</div><div class="post_footer"><span class="post_love" id="iLoveThePost-' . $id .'" onclick="lovePost(' . $id . ')">'
	. $post["love"] .'</span><span class="post_date">' . dateToReadableString($post["submitdate"]) . '</span></div></div>';
}

?>