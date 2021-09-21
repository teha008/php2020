<?php

// 1. Function which prints "Hello I am Zura"

// function hello()
// {
//   echo "Hello I am Zura" . '<br>';
// }
// hello();
// hello();
// hello();

// 2. Function with argument
function hello($name)
{
  return "Hello I am $name" . '<br>';
}

echo hello('Zura');
echo hello('Brad');

// 3. Create sum of two functions
// function sum($a, $b)
// {
//   return $a + $b;
// }

// echo sum(4, 5);

// 4. Create function to sum all numbers using ...$nums
// function sum(...$nums)
// {

//   $sum = 0;
//   foreach ($nums as $num) {
//     $sum += $num;
//   }
//   return $sum;
// }

// echo sum(1, 2, 3, 4, 5, 6);

// 5. Arrow functions
function sum(...$nums)
{
  return array_reduce(
    $nums,
    fn ($i1, $i2) => $i1 * $i2
  );
}

echo sum(1, 2, 3, 4, 5, 6);
