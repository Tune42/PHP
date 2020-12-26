<?php

// static properties and methods act on the class itself the rest is instance based
class Person {
    // public $name;
    // public $surname;
    // private $age;
    // public static $counter = 0; works without type casting

    public string $name;
    public string $surname;
    protected ?int $age; // protected, instead of private, allow child class to access
    public static int $counter = 0;


    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public static function getCounter() {
        return self::$counter;
    }
}