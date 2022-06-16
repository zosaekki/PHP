<?php
    class Fruit {
        // 멤버 필드
        private $name; // 속성 
        private $color;
        private $price;
        
        // 멤버 메소드
        function __construct() {
            return $this;
        }

        public function print_fruit() {
            print "name : {$this->name}<br>";
            print "color : {$this->color}<br>";
            print "price : {$this->price}<br>";
        }

        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function setColor($color) {
            $this->color = $color;
            return $this;
        }

        public function setPrice($price) {
            $this->price = $price;
            return $this;
        }
    }
    
    $apple1 = (new Fruit)->setName("사과");
    $apple1->print_fruit();

    $apple2 = (new Fruit)
                ->setColor("파란")
                ->setPrice(1000);
    $apple2->print_fruit();

    $banana1 = new Fruit;
    $banana1->setName("바나나");
    $banana1->setColor("노란");
    $banana1->setPrice(2000);
    $banana1->print_fruit();