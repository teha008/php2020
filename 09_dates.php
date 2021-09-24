<?php

date_default_timezone_set('Asia/Seoul');

// Print current date
echo date('Y-m-d H:i:s') . '<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time() - 24 * 60 * 60) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

// Print current timestamp
echo time() . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2021-09-24 09:00:00');
echo '<pre>';
var_dump($parsedDate);
'</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
'</pre>';
