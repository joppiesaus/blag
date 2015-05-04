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
if (empty($text))
{
	echo "Post cannot be empty!";
	exit;
}

require "blag.php";
require "postcounter.php";

// Get a new post identification number
$pid = getNewPostNumber();

// Get the paths
// You need DOCUMENT_ROOT. PHP doesn't allow that when mkdir
$postdir = BLAGPATH . "/p/" . $pid . "/";

// Make a directory for the post
mkdir($postdir);


saveFileContents($postdir . "post.json", json_encode([ "title" => $title, "date" => $date ]));

// Save the post!
saveFileContents($postdir . "index.html", $text);

// And return back to the blog
header("Location:index.php");
?>

</body>
</html>