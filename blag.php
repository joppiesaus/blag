<?php

define("BLAGPATH", $_SERVER['DOCUMENT_ROOT'] . "/blag");

function getPostjson($pid)
{
	return json_decode(getFileContents(BLAGPATH . "/p/" . $pid . "/post.json"), true);
}

function setPostjson($pid, $json)
{
	saveFileContents(BLAGPATH . "/p/" . $pid . "/post.json", json_encode($json));
}

// inserts target zero's to string
function fillUpZeros($t, $n)
{
	$len = $n - strlen($t);
	for ($i = 0; $i < $len; $i++)
	{
		$t = "0" . $t;
	}
	return $t;
};

// Prints the selected date in the internation standard date and time notation
function dateToReadableString($date)
{
	// TODO: Timezone
	return fillUpZeros($date["year"], 4) . "-" . fillUpZeros($date["mon"], 2) . "-" . fillUpZeros($date["mday"], 2) .
		" " . fillUpZeros($date["hours"], 2) . ":" . fillUpZeros($date["minutes"], 2) . ":" . fillUpZeros($date["seconds"], 2) . 
		" (" . $date["yday"] . "' " . $date["weekday"] . " " . $date["mday"] . " " . $date["month"] . ")";
}

// Assumes the file exists!
function getFileContents($url)
{
	$f = fopen($url, "r");
	$content = fread($f, filesize($url));
	fclose($f);
	return $content;
}

// Assumes the file exists!
function saveFileContents($url, $content)
{
	$f = fopen($url, "w");
	fwrite($f, $content);
	fclose($f);
}

?>