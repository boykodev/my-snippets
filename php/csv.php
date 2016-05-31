<?php

$filename = 'export.csv';
header("Content-Type: text/csv;charset=utf-8");
header("Content-Disposition: attachment;filename=\"$filename\"");
header("Pragma: no-cache");
header("Expires: 0");

$separator = '|';
$list = array('Title 1' . $separator . 'Title 2');

$data = array(); // get data here
foreach ($data as $key => $value) {
	$row = $value->_id . $separator . $value->text;
	$list[] = $row;
}

$file = fopen("php://output","w");

foreach ($list as $line) {
	fputcsv($file, explode($separator, $line));
}

fclose($file);
exit();
