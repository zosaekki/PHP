<?php
    class Computer {
        public static $brand;
        public $price;

        function myPrint() {
            print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다.<br>";
        }

        /*
        static function myStaticPrint() {
            print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다.<br>";
        }
        */
    }

    Computer::$brand = "LG";

    $c = new Computer;
    $c->price = 10000;

    $c2 = new Computer;
    $c2->price = 20000;


    $c->myPrint();
    $c2->myPrint();