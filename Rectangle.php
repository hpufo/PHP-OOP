<?php
    require_once('Shape.php');
    
    class Rectangle extends Shape{

        protected $w;
        protected $l;
        
        public function __construct($width,$length){
            $this->w = $width;
            $this->l = $length;
        }
        
        public function calcArea(){
            $this->area = $this->w * $this->l;
        }
        
        public function calcPerimeter(){
            $this->perimeter = 2 * ($this->l + $this->w); 
        }
        
        public function resize($percentage){
            $this->w += $this->w * $percentage;
            $this->l += $this->l * $percentage;
        }
        
        public function getDimensions(){
            $this->calcArea();
            $this->calcPerimeter();
            return array("width"=>$this->w, "length"=>$this->l, "area"=>$this->getArea(), "perimeter"=>$this->getPerimeter());
        }
    }
?>