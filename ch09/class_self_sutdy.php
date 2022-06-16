<?php
    class Name {
        public $first_name;
        public $second_name;

        function printName($f_name, $s_name) {
            print "first name is {$f_name} <br>";
            print "second name is {$s_name} <br>";
        }
    }

    $obj = new Name;
    $obj->first_name = "cho";
    $obj->second_name = "hyunmin";
    $obj->printName($obj->first_name, $obj->second_name);

    print "<hr>";

    class Fruit {
        private $fruit_name;
        private $fruit_color;

        public function getFruitName() {
            return $this->fruit_name;
        }

        function setFruitName($fruit_name) {
            $this->fruit_name = $fruit_name;
        }

        public function getFruitColor() {
            return $this->fruit_color;
        }

        function setFruitColor($fruit_color) {
            $this->fruit_color = $fruit_color;
        }
        
        function printFruit() {
            print "fruit name : {$this->fruit_name} <br>";
            print "fruit color : {$this->fruit_color} <br>";
        }
    }

    $obj = new Fruit;
    $obj->setFruitName("사과");
    $obj->setFruitColor("red");
    $obj->printFruit();

    print "<hr>";

    class Person {
        private $name;
        private $age;

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        function printPerson() {
            print "name : {$this->name} <br>";
            print "age : {$this->age} <br>";
        }
    }

    $obj = new Person("hong", 20);
    $obj->printPerson();