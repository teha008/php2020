<?php

// 1. 숫자 선언
$a = 5;
$b = 4;
$c = 1.2;

// 2. 산술 연산
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// 3. 연산자를 사용한 할당
// $a += $b;
// echo $a . '<br>';
// $a -= $b;
// echo $a . '<br>';
// $a *= $b;
// echo $a . '<br>';
// $a /= $b;
// echo $a . '<br>';
// $a %= $b;
// echo $a . '<br>';

// 4. 증분 연산자
echo $a++ . '<br>';
echo ++$a .  '<br>';

// 5. 감소 연산자
echo $a-- . '<br>';
echo --$a . '<br>';
// 6. 숫자를 함수로 검사
is_float(1.25); // true
is_double(1.24); // true  
is_int(5); // true
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// 7. 변환
$strNumber = '12.34';
$number = intVal($strNumber);
var_dump($number);
echo '<br>';

// 8. 숫자 함수
echo 'abs(-15) 값=> ' . abs(-15) . '<br>';
echo 'pow(2, 3) 값=> ' . pow(2, 3) . '<br>';
echo 'sqrt(16) 값=> ' . sqrt(16) . '<br>';
echo 'max(2, 3) 값=>  ' . max(2, 3) . '<br>';
echo 'min(2, 3) 값=> ' . min(2, 3) . '<br>';
echo 'round(2.4) 값=> ' . round(2.4) . '<br>';
echo 'round(2.6) 값=> ' . round(2.6) . '<br>';
echo 'floor(2.6) 값=> ' . floor(2.6) . '<br>';
echo 'ceil(2.4) 값=> ' . ceil(2.4) . '<br>';

// 9. 형식 지정 번호
$number = 123456789.12345;
echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php
