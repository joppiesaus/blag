<!DOCTYPE html>
<html>
<head>
	<title>Post something</title>
	<meta charset="utf-8">
</head>
<body>

<?php

// Get the infos!
$pid = $_POST["id"];
$title = $_POST["p_title"];
$text = $_POST["p_content"];

// If post is empty, abort!
if (empty($text))
{
	echo "Post cannot be empty!";
	exit;
}

require "blag.php";

// Edit!
echo "TODO: Allow edit";

// And return back to the blog
header("Location:index.php");
?>

</body>
</html>