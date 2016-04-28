<?php

function GetFileLine($filename, $start, $end){
	$content = array();

	$count = $end - $start;

	$fp = new SplFileObject($filename, 'rb');

	$fp->seek($start);
	for ($i=0; $i < $count; ++$i) { 
		$content[] = $fp->current();
		$fp->next();
	}

	return array_filter($content);
}

function RunCommand($cmd){
	$out = system($cmd, $result);
	return $result;
}