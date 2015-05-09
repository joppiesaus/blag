<?php

// Requires blag.php

// Love this post!
function love($pid)
{
	$post = getPostjson($pid);
	$post["love"]++;
	setPostjson($pid, $post);
	return $post["love"];
}

?>