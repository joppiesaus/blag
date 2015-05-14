<!DOCTYPE html>
<html>
<head>
	<title>Edit post</title>
	<meta charset="utf-8">
</head>
<body>

<?php

if (!isset($_GET["id"]))
{
	echo "No post to edit!";
	exit;
}

require "blag.php";

$id = intval($_GET["id"]);
$post = getPost($id);

echo '<form action="do_edit.php" method="post">Title: <input type="text" value="' . $post->content["title"] . '" name="p_title" /><br><br>Text: <textarea value="" name="p_content">' . $post->content["content"] . '</textarea><input type="submit" value="Edit post ' . $id . '"/></form>';

session_start();
$_SESSION["id"] = $id;

?>

</body>
</html>