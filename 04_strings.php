<?php

// // 단순 문자열 작성
// $name = "상호";
// $string = '헤이 $name';
// $string2 = "헤이 $name";

// echo $string . '<br>';
// echo $string2 . '<br>';

// // 문자열 연결
// echo 'Hello ' . ' World' . ' and PHP' . '<br>';

// // 문자열 함수
// $string = '    Hello World    ';

// echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
// echo "2 - " . trim($string) . '<br>' . PHP_EOL;
// echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
// echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
// echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
// echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
// echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
// echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
// echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
// echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
// echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
// echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL;
// echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
// echo "14 - " . substr($string, 8, 6) . '<br>' . PHP_EOL;
// echo "15 - " . str_replace('world', 'PHP', $string) . '<br>' . PHP_EOL;
// echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

// 여러 줄 텍스트 및 줄 바꿈
$longText = "
  Hello, my name is sangho
  I am 27,
  I love my cookie.
";

echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// 여러 줄 텍스트 및 예약 html 태그
$longText = "
  Hello, my name is <b>sangho</b>
  I am <b>27</b>,
  I love my cookie.
";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>';
echo "4 - " . nl2br(htmlentities($longText)) . '<br>';
echo html_entity_decode('&lt;b&gt;sangho&lt;/b&gt;') . '<br>';

// https://www.php.net/manual/en/ref.strings.php