<!DOCTYPE html>
<html>
<head>
	<title>Blag</title>
	<meta charset="utf-8">
</head>
<body>

<p><a href="post.php">Post something new</a></p>
<?php
echo "TODO: Make blag";

require_once "do_view.php";
require_once "postcounter.php";


$a = getPostCount();
for ($i = 0; $i > -20; $i++)
{
	view($a--);
	if ($a < 0)
	{
		break;
	}
}

?>

</body>
</html>