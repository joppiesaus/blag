<!DOCTYPE html>
<html>
<head>
	<title>Blag</title>
	<link rel="stylesheet" type="text/css" href="view_style.css">
	<meta charset="utf-8">
</head>
<h1>My blag</h1>
<body>

<?php

$pids = $_GET["id"];

if (strlen($pids) == 0)
{
	exit;
}

$pidarr = explode(",", $pids);

require_once "do_view.php";

foreach ($pidarr as $pid)
{
	view($pid);
}

?>

</body>
</html>