<?php
// Requires blag.php
require "datehelper.php";

// Displays a post
function view($id)
{
	$post = getPost($id);

	$post->content["views"]++;

	$post->save();

	// Display it
	// TODO: Make better
	echo '<div class="post"></span><h1 class="post_title"><a href="' 
	. 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] . '?id=' . $id . '">' . 
	$post->content["title"] . 
	'</a></h1><div class="post_content">' . $post->content["content"] . '</div><div class="post_footer"><span class="post_views">'
	. $post->content["views"] .'</span><span class="post_date">' . dateToReadableString($post->content["submitdate"]) . '</span></div></div>';
}

?>