<?php
    require_once('Shape.php');
    
    class RightTriangle extends Shape{
        private $a;     //height
        private $b;     //base
        
        public function __construct($height,$base){
            $this->a = $height;
            $this->b = $base;
        }
        
        public function calcArea(){
            $this->area = ($this->a * $this->b)/2;
        }
        
        public function calcPerimeter(){
            $this->perimeter = $this->a + $this->b + sqrt(pow($this->a,2) + pow($this->b,2)); 
        }
        
        public function resize($percentage){
            $this->a += $this->a * $percentage;
            $this->b += $this->b * $percentage;
        }
        
        public function getDimensions(){
            $c = sqrt(pow($this->a,2) + pow($this->b,2));
            $this->calcArea();
            $this->calcPerimeter();
            return array("SideA"=>$this->a, "SideB"=>$this->b, "SideC"=>$c, "area"=>$this->getArea(), "perimeter"=>$this->getPerimeter());
        }
    }
?>