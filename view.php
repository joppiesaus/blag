<?php

$pid = $_GET["id"];

if (strlen($pid) == 0)
{
	exit;
}

$pidarr = explode(",", $pid);

// TODO: Implement viewing

?>