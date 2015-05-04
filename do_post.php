<!DOCTYPE html>
<html>
<head>
	<title>Post something</title>
	<meta charset="utf-8">
</head>
<body>

<?php

$date = getdate();
$title = $_POST["p_title"];
$text = $_POST["p_content"];

// If post is empty, abort!
if (strlen($text) === 0)
{
	echo "Post cannot be empty!";
	exit;
}

require_once "blag.php";
require_once "postcounter.php";

// Get a new post identification number
$pid = getNewPostNumber();

// Get the paths
// You need DOCUMENT_ROOT. PHP doesn't allow that when mkdir
$postdir = $_SERVER['DOCUMENT_ROOT'] . "/blag/p/" . $pid . "/";

// Make a directory for the post
mkdir($postdir);


saveFileContents($postdir . "post.json", json_encode([ "title" => $title, "date" => $date ]));

// Save the post!
saveFileContents($postdir . "index.html", $text);
?>

</body>
</html>