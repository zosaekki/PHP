<?php
    class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : {$this->name}<br>";
            print "Age : {$this->age}<br>";
        }
    }

    class Student1 extends People {
        private $studentId;

        function __construct($name, $age, $studentId) {
            print "나는 Student요.<br>";
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $studentId;
        }

        function printStudent() {
            print "- Student - <br>";
            //$this->printPeople();
            parent::printPeople();
            print "Id : {$this->studentId}<br>";
        }

        function printPeople() { // 오버라이딩
            print "Student에 있는 print People<br>";
        }
    }
    $stu1 = new Student1("홍길동", 21, 1010);
    $stu1->printPeople();
    print "---------------<br>";
    $stu1->printStudent();