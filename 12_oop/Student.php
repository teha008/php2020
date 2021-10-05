<?php

require_once 'Person.php';


class Student extends Person
{
  public string $studentId;

  public function __construct(string $name, string $surname, $studentId)
  {
    parent::__construct($name, $surname);
    $this->age = 18;
    $this->studentId = $studentId;
  }
}
