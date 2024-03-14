<?php

require_once 'FilterPHP.php';

$file_tech = fopen('tech.txt', 'r');

stream_filter_register('php.filter', 'FilterPHP');

stream_filter_append($file_tech, 'php.filter');

echo fread($file_tech, filesize('tech.txt'));