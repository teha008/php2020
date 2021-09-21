<?php

$age = 25;
$salary = 300000;

// // 1. if문 샘플:
// if ($나이 === 20) {
//   echo "1" . '<br>';
// }

// // 2. if문 중괄호 없이 
// if ($나이 === 20) echo "1" . '<br>';

// // 3. 샘플 if-else
// if ($나이 > 20) {
//   echo "1" . '<br>';
// } else {
//   echo "2" . "<br>";
// }

// // 4. ==와 ===의 차이
// echo $age == 20;
// echo $age == '20';

// echo $age === 20;
// echo $age === '20';

// // 5. if AND
// if ($age > 20 || $salary === 300000) {
//   echo "Do something";
// }


// // if OR

// // 6. Ternary if
// echo $age < 22 ? 'Young' : 'Old';

// 7. Short ternary
$myAge = $age ?: 118;
echo '<pr>';
var_dump($myAge);
'</pr>';

// 8. null 병합 연산자
$myName = isset($name) ? $name : 'Guest';
$myName = $name ?? 'John';

// 9. switch
$randNum = random_int(0, 3);
// echo $randNum;

$userRole = ['admin', 'editor', 'user', 'cho'];
switch ($userRole[$randNum]) {
  case 'admin':
    echo 'admin';
    break;
  case 'editor':
    echo 'editor';
    break;
  case 'user':
    echo 'user';
    break;
  default:
    echo 'Invalid role';
}
