<?php

// TODO: Implement

class Post
{
	$id;
	$content;

	// Saves this post
	function save()
	{

	}
}

// Makes a new post + id for you. You can later set it's properties.
function newPost()
{
	
}

// Get's the target post 
function getPost($id)
{

}

// Gets the latest post id
function getLatestPostId()
{

}

// Gets the latest post
function getLatestPost()
{
	return getPost(getLatestPostId());
}

?>