<!DOCTYPE html>
<html>
<head>
	<title>Post something</title>
	<meta charset="utf-8">
</head>
<body>

<?php

$date = getdate();
$title = $_POST["p_title"];
$text = $_POST["p_content"];

#echo $date . "<br>";
#echo $title . "<br>";
#echo $text;

require_once "postcounter.php";

// get a new post identification number
$pid = getNewPostNumber();

$postdir = "/p/" . $pid . "/";
$postpath = $postdir . "index.html";

// make a directory for the post
mkdir($postdir);

// save the post
chmod($postpath, 0700); // Oh my god. PHP, y u do dis to me. we need to talk. its over. Oh, but wait, I need you,.
$fs = fopen($postpath, "w");
fwrite($fs, $text);
fclose($fs);

/*$fs = fopen($postpath, "r");
$thing = fread($fs, filesize($postpath));
fclose($fs);

echo $thing;*/

?>

</body>
</html>