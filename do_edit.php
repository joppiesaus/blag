<?php

session_start();
$id = $_SESSION["id"];
session_destroy();

$title = $_POST["p_title"];
$text = $_POST["p_content"];

// If post is empty, abort!
if (empty($text))
{
	echo "Post cannot be empty!";
	exit;
}

require "blag.php";

$post = getPost($id);


$post->content["title"] = $title;
$post->content["content"] = $text;

$post->save();

// And return back to the blog
header("Location:index.php");

?>