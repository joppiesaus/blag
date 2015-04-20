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

echo $date . "<br>";
echo $title . "<br>";
echo $text;

?>

</body>
</html>