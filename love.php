<?php
//2complex4me
//veryman.expert

if (!empty($_GET["id"]))
{
	require "do_love.php";
	require "blag.php";

	header("Content-Type: text/plain");
	echo love(intval($_GET["id"]));
}

?>