<?php
require_once("Person.php");
require_once("Student.php");

$p = new Person("Michae", "Book");
echo '<pre>';
var_dump($p);
echo '</pre>';

$p->name = 'Michael';

echo $p->name.'<br>';

$p->setAge(31);
echo $p->getAge().'<br>';

echo Person::getCounter().'<br>';

$s = new Student("Aaron", "Badman", 111);

echo '<pre>';
var_dump($s);
echo '</pre>';