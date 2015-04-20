<?php
define("POST_COUNT_FILENAME", "count.txt");

function getPostCount()
{
	// I don't like PHP, but it's fun to progam with it.
	if (!file_exists(POST_COUNT_FILENAME))
	{
		$f = fopen(POST_COUNT_FILENAME, "w");
		fwrite($f, "0");
		fclose($f);
	}

	$f = fopen(POST_COUNT_FILENAME, "r");
	$count = fread($f, filesize(POST_COUNT_FILENAME));
	fclose($f);

	return $count;
}

function setPostCount($count)
{
	$f = fopen(POST_COUNT_FILENAME, "w");
	fwrite($f, $count);
	fclose($f);
}

function getNewPostNumber()
{
	$count = getPostCount();
	setPostCount($count + 1);
	return $count;
}
?>