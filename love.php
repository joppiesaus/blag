<?php
//2complex4me
//veryman.expert


if (array_key_exists("id", $_GET))
{
	require "do_love.php";
	require "blag.php";

	header("Content-Type: text/plain");
	echo love(intval($_GET["id"]));
}

?>