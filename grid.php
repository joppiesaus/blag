<!DOCTYPE html>
<html>
<head>
	<title>Blag post history</title>
	<meta charset="utf-8">
</head>
<body>

<?php

require "blag.php";
require "postcounter.php";
require "do_view.php";

$a = getPostCount();

function getPostTitle($pid)
{
	return getPostjson($pid)["title"];
}

for (; $a > 0; $a--)
{
	echo '<div><a href="index.php?id=' . $a . '">' . getPostTitle($a) . '</a></div>';
}

?>

<br><br><a href="index.php">Back to blag</a>

</body>
</html>