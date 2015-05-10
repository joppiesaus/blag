<?php

// Requires blag.php

// Love this post!
function love($pid)
{
	$post = getPostjson($pid);
	// TODO: Check if user already loved the post
	$post["love"]++;
	setPostjson($pid, $post);
	return $post["love"];
}

?>