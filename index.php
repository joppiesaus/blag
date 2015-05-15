<!DOCTYPE html>
<html>
<head>
	<title>Blag</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>

<nav id="lnav">
	<ul>
		<li><a href="post.php">Post something new</a></li>
		<li><a href="grid.php">View post history</a></li>
		<li><a href="edit.php">Edit a post</a></li>
	</ul>
</nav>

<div id="container">

<?php
require "blag.php";
require "do_view.php";

// Display selected post(s),
if (array_key_exists("id", $_GET))
{
	$pids = explode(",", $_GET["id"]);

	foreach ($pids as $pid)
	{
		view($pid);
	}
}
else // Or display last twenty posts instead (or selected history)
{
	$a;
	if (array_key_exists("from", $_GET))
	{
		$a = intval($_GET["from"]);
	}
	else
	{
		$a = getLatestPostId();
	}

	for ($i = 0; $i < 20; $i++)
	{
		if ($a < 0)
		{
			break;
		}
		view($a--);
	}
}

?>

</div>
</body>
</html>