<?php
    class EquilateralTriangle extends Shape{
        require_once('Shape.php');
        
        private $sides;
        
        public function __construct($_sides){
            $this->sides = $_sides;
        }
        
        public function calcArea(){
            $this->area = sqrt(3)/4 * pow($this->sides,2);
        }
        
        public function calcPerimeter(){
            $this->perimeter = 3 * $this->sides; 
        }
        
        public function resize($percentage){
            $this->sides += $this->sides * $percentage;
        }
        
        public function getDimensions(){
            $this->calcArea();
            $this->calcPerimeter();
            return array("sides" => $this->sides, "area"=>$this->getArea(), "perimeter"=>$this->getPerimeter());
        }
    }
?>