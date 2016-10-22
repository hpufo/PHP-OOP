<?php
    require_once('Rectangle.php');
    
    class Square extends Rectangle{
        
        public function __construct($sides){
            $this->w = $sides;
            $this->l = $sides;
        }
    }
    
    $square = new Square(5);
    echo var_dump($square->getDimensions());
?>