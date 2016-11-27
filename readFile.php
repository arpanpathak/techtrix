<?php
	function readIt($fileName){
		$file=fopen($fileName, "r") or die("Can't read file!");
		$contents="";
		while (!feof($file)) {
			$contents=$contents.fgets($file);
		}
		fclose($file);
		return $contents;

	}
?>