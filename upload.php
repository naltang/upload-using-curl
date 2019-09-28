<?php

	// change these variables

	$VAR = "f";
	$SIZE_LIMIT = 100 * 1000 * 1000;
	$DIR = "upload/";

	if (!isset($_FILES [$VAR]["name"]))
	{
		$where = __LINE__;
		echo $where;
		exit($where);
	}

	$filename = $DIR . basename($_FILES[$VAR]["name"]);

	if ($_FILES[$VAR]["size"] > $SIZE_LIMIT)
	{
		$where = __LINE__;
		echo $where;
		exit($where);
	}

	if (file_exists($filename))
	{
		unlink($filename);
	}

	$ret = move_uploaded_file($_FILES[$VAR]["tmp_name"], $filename);
	echo $ret;
?>
