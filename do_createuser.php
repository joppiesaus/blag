<?php
$username = $_POST["username"];
$password = $_POST["password"];

if (file_exists("users.json"))
{
	$f = fopen("users.json", "r");
	$users = json_decode(fread($f, filesize("users.json")), true);
	fclose($f);
	$users[$username] = $password;
	$f = fopen("users.json", "w");
	fwrite($f, json_encode($users));
	fclose($f);
}
else
{
	$f = fopen("users.json", "w");
	fwrite($f, json_encode(array($username => $password)));
	fclose($f);
	chmod("users.json", 0700);
}

echo "Created user " . $username . "!";

?>