<?php
    require_once('Shape.php');
    
    abstract class Parallelogram extends Shape{
        
        private $a;
        private $b;     //length
        private $h;
        
        public function __construct($sideA, $sideB, $_height){
            $this->a = $sideA;
            $this->b = $sideB;
            $this->h = $_height;
        }
        
        public function calcArea(){
            $this->area = $this->b * $this->h;
        }
        
        public function calcPerimeter(){
            $this->perimeter = 2 * ($this->a + $this->b); 
        }
        
        public function resize($percentage){
            $this->a += $this->a * $percentage;
            $this->b += $this->b * $percentage;
            $this->h += $this->h * $percentage;
        }
        
        public function getDimensions(){
            return array("sides"=>$this->a, "base"=>$this->b, "height"=>$this->h);
        }
    }
?>