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
		<li><a href="index.php?id=1,5">Go buy your mom a house</a></li>
	</ul>
</nav>

<div id="container">

<?php
// Let's face it. PHP sucks. But that's ok.

require "blag.php";
require "do_view.php";

// Display selected post(s),
if (!empty($_GET["id"]))
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
	if (empty($_GET["from"]))
	{
		require "postcounter.php";
		$a = getPostCount();
	}
	else
	{
		$a = intval($_GET["from"]);
	}

	for ($i = 0; $i < 20; $i++)
	{
		view($a--);
		if ($a < 0)
		{
			break;
		}
	}
}

?>

</div>
</body>
</html>