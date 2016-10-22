<?php
    require_once('../Circle.php');
    require_once('utils.php');
    
    echo html_header("Circle");
    $circle = new Circle(5);
    echo '<p>'.print_r($circle->getDimensions()).'</p>';
    echo '<p>Resizing the circle by 50%</p>';
    $circle->resize(.5);
    echo '<p>'.print_r($circle->getDimensions()).'</p>';
    echo '<p>Resizing the circle by -10%</p>';
    $circle->resize(-.1);
    echo '<p>'.print_r($circle->getDimensions()).'</p>';
    echo html_footer();
?>