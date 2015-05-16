<?php
$username = $_POST["username"];
$password = $_POST["password"];


if (file_exists("users.json"))
{
	$f = fopen("users.json", "r");
	$users = json_decode(fread($f, filesize("users.json")), true);
	fclose($f);

	if (isset($users[$username]))
	{
		if ($users[$username] == $password)
		{
			session_start();
			$_SESSION["who"] = $username;
			echo "Succesfully logged in!";
			exit();
		}
	}
}

echo "You're wrong!";

?>