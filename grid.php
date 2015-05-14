<!DOCTYPE html>
<html>
<head>
	<title>Blag history</title>
	<meta charset="utf-8">
</head>
<body>
<?php

require "blag.php";

for ($i = getLatestPostId(); $i > 0; $i--)
{
	echo '<a href="index.php?id=' . $i . '">' . getPost($i)->content["title"] . '</a><br>';
}

?>
<br><a href="index.php">Back to blag</a>
</body>
</html>