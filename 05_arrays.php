<?php

// // 1. 배열 만들기
// $fruits = ["Banana", "Apple", "Orange"];

// // 2. 전체 배열 인쇄
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // 3. 인덱스별로 요소 가져오기
// echo $fruits[1] . '<br>';

// // 4. 인덱스별로 요소 설정
// $fruits[0] = 'Peach';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // 5. 배열에 인덱스 2에 요소가 있는지 확인합니다.
// isset($fruits[3]); // false

// // 6. 요소 추가
// $fruits[] = 'Banana';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // 7. 배열 길이 인쇄
// echo count($fruits) . '<br>';

// // 8. 배열 끝에 요소 추가
// array_push($fruits, 'Orange');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // 9. 배열 끝에서 요소 제거
// echo array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // 10. 배열 시작 부분에 요소 추가
// array_unshift($fruits, 'bar');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // 11. 배열의 시작 부분에서 요소 제거
// echo array_shift($fruits);

// // 12. 문자열을 배열로 분할
// $string = "Banana,Apple,Peach";
// echo '<pre>';
// var_dump(explode(',', $string));
// echo '</pre>';

// // 13. 배열 요소를 문자열로 결합
// echo implode("&", $fruits);

// // 14. 요소가 배열에 있는지 확인합니다.
// echo '<pre>';
// var_dump(in_array("Mango", $fruits));
// echo '</pre>';

// // 15. 배열에서 요소 인덱스 검색
// echo '<pre>';
// var_dump(array_search("Apple", $fruits));
// echo '<pre>';
// // 16. 두 배열 병합
// echo '16. 두 배열 병합';
// $vegetables = ["Potato", "cucumber"];
// echo '<pre>';
// var_dump(array_merge($fruits, $vegetables));
// var_dump([...$fruits, ...$vegetables]);
// echo '</pre>';

// // 17. 배열 정렬(역순도 포함)
// // sort($fruits);
// rsort($fruits);
// echo '17. 배열 정렬(역순도 포함)';
// echo '<pre>';
// var_dump($fruits);
// '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// 18. 연관 배열 작성
$person = [
  'name' => '상호',
  'surname' => '조',
  'age' => 36,
  'hobbies' => ['게임', '영화']
];

echo '<pre>';
print_r($person);
'</pre>';

// 19. 키별 요소 가져오기
echo $person['name'] . '<br>';

// 20. 키별로 요소 설정
$person['channel'] = 'teha007';
echo '<pre>';
var_dump($person);
'</pre>';

// 21. 병합 할당 연산자가 null입니다. PHP 7.4 이후
// if (!isset($person['address'])) {
//   $person['address'] = '서울';
// }
$person['address'] ??= '서울1223';

echo '<pre>';
var_dump($person);
'</pre>';

// 어레이에 특정 키가 있는지 확인

// 22. 배열 키 인쇄
echo '<pre>';
var_dump(array_keys($person));
'</pre>';

// 23. 배열 값 인쇄
echo '배열 값 인쇄';
echo '<pre>';
var_dump(array_values($person));
'</pre>';

// 24. 값, 키별로 연관 배열 정렬
echo '값, 키별로 연관 배열 정렬';
asort($person);
echo '<pre>';
var_dump($person);
'</pre>';

// 25. 2차원 배열
$todos = [
  ['title' => 'Todo title 1', 'completed' => true],
  ['title' => 'Todo title 2', 'completed' => false],
];

echo '<pre>';
var_dump($todos);
'</pre>';
