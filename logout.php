<?php
session_start();

if (isset($_SESSION["who"]))
{
	$name = $_SESSION["who"];
	session_destroy();
	echo "You're now logged out, " . $name . "!";
}
else
{
	echo "Nobody is logged in!";
}

?>