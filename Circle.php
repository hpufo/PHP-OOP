<?php
    require_once('Shape.php');
    
    class Circle extends Shape{
        private $radius;
        
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
?>