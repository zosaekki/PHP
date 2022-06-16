<?php
    // public (접근지시어, 접근제어자, Access Modifier)
    // public(완전 오픈), protected, private(은닉화, 캡슐화 /  class 안에서만 사용 할 수 있음)
    class Student { // 멤버필드에 상수만 public 가능 함!!!!!!!!
        private $studentId;
        private $studentName;

        // getters
        public function getStudentId() {
            return $this->studentId;
        }
        // setters
        public function setStudentId($studentId) {
            $this->studentId = $studentId;
        }

        public function getStudentName() {
            return $this->studentName;
        }

        public function setStudentName($studentName) {
            $this->studentName = $studentName;
        }

        public function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }
    }

    $obj = new Student;
    $obj->setStudentId(12);
    $obj->setStudentName("홍길동");
    $obj->printStudent();