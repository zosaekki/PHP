<?php
    // public (접근지시어, 접근제어자, Access Modifier)
    // public(완전 오픈), protected, private(은닉화, 캡슐화 /  class 안에서만 사용 할 수 있음)
    class Student {
        private $studentId;
        private $studentName;

        public function printStudent($id, $name) {
            print "ID : ${id}<br>";
            print "Name : ${name}<br>";
        }
    }

    $obj = new Student;
    $obj->studentId = 12412;
    $obj->studentName = "홍";

    $obj->printStudent($obj->studentId, $obj->studentName);