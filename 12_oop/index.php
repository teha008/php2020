<?php

// What is class and instance

require_once 'Person.php';
require_once 'Student.php';

$student = new Student('조', '상호', 1);
echo '<pre>';
var_dump($student);
'</pre>';
// echo $student->name;
// echo $student->surname;

// $p = new Person('조', '상호');
// // $p->age = 30; 
// $p->setAge('30');
// echo $p->getAge();

// echo '<pre>';
// var_dump($p);
// '</pre>';

// $p2 = new Person('이', '민재');
// echo '<pre>';
// var_dump($p2);
// '</pre>';
// echo Person::getCounter();

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter