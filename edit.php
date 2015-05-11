<!DOCTYPE html>
<html>
<head>
	<title>Post something</title>
	<meta charset="utf-8">
</head>
<body>

<form action="do_edit.php" method="post">

<?php
	
	if (!array_key_exists("id", $_GET))
	{
		echo "Missing post to edit!";
		exit;
	}

	$pid = intval($_GET["id"]);

	require "blag.php";

	$title = getPostjson($pid)["title"];
	$text = getFileContents(BLAGPATH . '/p/' . $pid . '/index.html');

	echo 'Title: <input type="text" value="' . $title . '" name="p_title" /><br><br>';
	echo 'Text: <textarea name="p_content">' . $text . '</textarea>';

	$_POST["id"] = $pid;

	echo '<input type="submit" value="Edit" />';
?>
</form>

</body>
</html>