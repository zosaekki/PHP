<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        function __construct($name, $color, $price) { // 생성자 함수, 생성 후엔 호출 불가능
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        public function print_fruit() {
            print "name : {$this->name}<br>";
            print "color : {$this->color}<br>";
            print "price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple", null, 1000);
    $banana = new Fruit("Banana", "yellow", 500);

    $apple-> print_fruit();
    $banana-> print_fruit();