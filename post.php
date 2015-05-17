<!DOCTYPE html>
<html>
<head>
	<title>Post something</title>
	<meta charset="utf-8">
</head>
<body>

<?php
session_start();

if (!isset($_SESSION["who"]))
{
	echo "<b>Note</b>: You cannot post something, because you aren't logged in. <a href=\"login.php\">Login</a>";
}
?>

<form action="do_post.php" method="post">

	Title: <input type="text" value="" name="p_title" /><br><br>
	Text: <textarea value="" name="p_content"></textarea>
	<input type="submit" value="Post" />

</form>

</body>
</html>