<?php
    class Computer {
        private static $cnt;
        private $modelName;
        private $price;

        function __construct($modelName = null, $price = null) {
            self::$cnt++;
            $this->modelName = $modelName;
            $this->price = $price;
        }

        function printInfo() {
            print "모델명 : {$this->modelName}, 가격 : {$this->price}<br>";
        }

        static function totalProductCnt() {
            print "총 생산된 컴퓨터 수 " . self::$cnt . "<br>";
        }
    }

    $c1 = new Computer("abc-123", 40000);
    $c2 = new Computer("qdd-235", 50000);
    $c3 = new Computer("czx-eee", 60000);
    $c4 = new Computer("rge-425", 70000);
    $c5 = new Computer("uuy-248", 80000);

    $c1->printInfo();
    $c2->printInfo();
    $c3->printInfo();
    $c4->printInfo();
    $c5->printInfo();

    /*
    $c1->totalProductCnt();
    $c2->totalProductCnt();
    $c3->totalProductCnt();
    $c4->totalProductCnt();
    */

    Computer::totalProductCnt();