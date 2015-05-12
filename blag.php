<?php

require "postcounter.php";

define("BLAGDIR", $_SERVER["DOCUMENT_ROOT"] . "/blag");
define("POSTDIR", BLAGDIR . "/p/");

// TODO: Implement

class Post
{
	var $id;
	var $content;

	// Saves this post
	function save()
	{
		$f = fopen(POSTDIR . $id . "/post.json", "w");
		fwrite($f, $content);
		fclose($f);
	}

	// Loads this post
	function load()
	{
		$f = fopen(POSTDIR . $id . "/post.json", "r");
		$content = fread($f);
		fclose($f);
	}
}

// Makes a new post + id for you. You can later set it's properties.
function newPost()
{
	$post = new Post();
	$post->id = getNewPostNumber();
}

// Get's the target post 
function getPost($id)
{
	$post = new Post();
	$post->id = $id;
	$post->load();
}

// Gets the latest post id
function getLatestPostId()
{
	return getPostCount();
}

// Gets the latest post
function getLatestPost()
{
	return getPost(getLatestPostId());
}

?>