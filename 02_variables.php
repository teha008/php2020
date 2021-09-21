<?php

// 변수란 무엇인가?
/* ================================== */

// 1. 변수 유형

/*
  1. String
  2. Integer
  3. Float
  4. Boolean
  5. Null 
  6. Array
  7. Object
  8. Resource
*/

// 2. 변수 선언
$name = '상호';
$age = 36;
$isMale = true;
$height = 1.85;
$salary = null;

// 3. 변수를 인쇄합니다. 연결이란 무엇인지 설명합니다.
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// 4. 변수의 유형 인쇄
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// 5. 전체 변수 인쇄
var_dump($name, $age, $isMale, $height, $salary);

// 6. 변수 값 변경
$name = true;

echo '<br>';
echo gettype($name) . '<br>';

// 7. 변수 유형 출력
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// 8. 변수 검사 함수
isset($name); // true
isset($address); // false

// 9. 상수
define('PI', 3.14);
echo PI . '<br>';

// 10. PHP 기본 제공 상수 사용
echo SORT_ASC . '<br>';
echo SORT_DESC . '<br>';
echo PHP_INT_MAX . '<br>';
