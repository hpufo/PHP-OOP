<?php
    abstract class Shape{
        protected $area;
        protected $perimeter;
        
        abstract public function calcArea();
        abstract public function calcPerimeter();
        abstract public function resize($percentage); //$percentage should be between -1 to 1 so .1 for 10% bigger
        abstract public function getDimensions();
        
        public function getArea(){
            return $this->area;
        }
        
        public function getPerimeter(){
            return $this->perimeter;
        }
    }
?>