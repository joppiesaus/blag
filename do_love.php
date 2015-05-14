<?php

// Requires blag.php

// Love this post!
function love($id)
{
	$post = getPost($id);

	// TODO: Check if user already loved the post
	$luv = ++$post->content["love"];

	$post->save();
	return $luv;
}

?>