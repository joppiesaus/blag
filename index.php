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
		<li><a href="grid.php">TODO: View post history</a></li>
		<li><a href="edit.php">TODO: Edit a post</a></li>
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
<script>
// GetElementById
function gebi(id)
{
	return document.getElementById(id);
}

// Sends an asynchronous http get and returns it's content
function httpGet(url, callback)
{
	// Good old javascript!
	var http = new XMLHttpRequest();
	http.open("GET", url, true);
	http.onload = callback;
	http.send(null);
}


// Gives the target post some love and updates the love on the page
function lovePost(id)
{
	httpGet("love.php?id="+id,
		function()
		{
			gebi("iLoveThePost-"+id).innerHTML = this.responseText;
		}
	);
}
</script>
</body>
</html>