<?php
	/*
	MIT License

	Copyright (c) 2019 Chang Park

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.
	*/

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
