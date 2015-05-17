<?php

$title = $_POST["p_title"];
$text = $_POST["p_content"];

// If post is empty, abort!
if (empty($text))
{
	echo "Post cannot be empty!";
	exit;
}

session_start();

if (!isset($_SESSION["who"]))
{
	echo "Nobody logged in!";
	exit;
}

require "blag.php";

$post = newPost();


$post->content["title"] = $title;
$post->content["content"] = $text;
$post->content["submitdate"] = getDate();
$post->content["views"] = 0;

$post->save();

// And return back to the blog
header("Location:index.php");

?>