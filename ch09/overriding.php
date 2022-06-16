<?php
    class Animal {
        function crying() {
            print "동물이 운다. <br>";
        }
    }

    class Dog extends Animal {
        function crying() {
            print "강아지가 멍멍. <br>";
        }
    }

    class Chiwawa extends Dog {
        function crying() {
            print "치와와가 왕왕. <br>";
        }
    }

    class Cat extends Animal {
        function crying() {
            print "고양이가 야옹. <br>";
        }
    }

    function Docry($ani) {
        if(method_exists($ani, "crying")) {
            $ani->crying();
        } else {
            print "crying 메소드 없음!";
        }
    }

    Docry(new Chiwawa);
    Docry(new Cat);
    Docry(new Dog);
    Docry(new Animal);