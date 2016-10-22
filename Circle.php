<?php
    require_once('Shape.php');
    
    class Circle extends Shape{
        private $radius =0;
        
        public function __construct($rad){
            $this->radius = $rad;
        }
        
        public function calcArea(){
            $this->area = pi() * pow($this->radius,2);
        }
        
        public function calcPerimeter(){
            $this->perimeter = 2 * pi() * $this->radius;
        }
        
        public function resize($percentage){
            $this->radius += $this->radius * $percentage;
        }
        
        public function getDimensions(){
            $diameter = $this->radius *2;
            $this->calcArea();
            $this->calcPerimeter();
            return array("radius" => $this->radius, "diameter" => $diameter, "area"=>$this->getArea(), "perimeter"=>$this->getPerimeter());
        }
    }
    //simple test will move these to a different file
    $circle = new Circle(5);
    $result =$circle->calcArea();
    $result =$circle->calcPerimeter();
    $circle->resize(.10);
    echo var_dump($circle->getDimensions());
    //echo 'Circle Area: '.$circle->getArea();
    //echo 'Circle Perimeter: '.$circle->getPerimeter();
?>