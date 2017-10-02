<?php
$text = file_get_contents('kadai4.txt');
$array = explode(PHP_EOL, trim($text));

var_dump($array);

?>
