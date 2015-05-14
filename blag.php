<?php

require "postcounter.php";

define("BLAGDIR", $_SERVER["DOCUMENT_ROOT"] . "/blag");
define("POSTDIR", BLAGDIR . "/p/");

// TODO: Implement

class Post
{
	public $id;
	public $content;

	// Saves this post
	public function save()
	{
		$f = fopen(POSTDIR . $this->id . "/post.json", "w");
		fwrite($f, json_encode($this->content));
		fclose($f);
	}

	// Loads this post
	public function load()
	{
		$path = POSTDIR . $this->id . "/post.json";
		$f = fopen($path, "r");
		$this->content = json_decode(fread($f, filesize($path)), true);
		fclose($f);
	}
}

// Makes a new post + id for you. You can later set it's properties. You MUST save it thought.
function newPost()
{
	$post = new Post;
	$post->id = getNewPostNumber();
	mkdir(POSTDIR . $post->id);
	return $post;
}

// Get's the target post 
function getPost($id)
{
	$post = new Post;
	$post->id = $id;
	$post->load();
	return $post;
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