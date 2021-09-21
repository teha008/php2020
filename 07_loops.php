<?php

// while
// while (true) {
//   echo 123;
// }

// Loop with $counter
// $counter = 0;
// while ($counter < 10) {
//   echo $counter . '회차' . '<br>';
//   if ($counter === 5) {
//     break;
//   }
//   $counter++;
// }

// do - while
// $counter = 0;
// do {
//   echo $counter . '회차' . '<br>';
//   $counter++;
// } while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
  echo $i . '회차' . '<br>';
}

// foreach
$fruits = ['바나나', '사과', '오렌지'];

foreach ($fruits as $index => $fruit) {
  echo $index . '번: ' . $fruit . '<br>';
}

// 연관 배열 위에 반복됩니다.
$person = [
  'name' => '홍길동',
  'surname' => '서울',
  'age' => 20,
  'hobbies' => ['축구', '코딩', '요리']
];

foreach ($person as $key => $value) {
  // echo $key . ': ' . $value . '<br>';
  if (is_array($value))
    echo $key . ': ' . implode(",", $value) . '<br>';
  else
    echo $key . ': ' . $value . '<br>';
}
