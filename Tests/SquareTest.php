<?php
    require_once('../Square.php');
    require_once('utils.php');
    
    echo html_header("Square");
    $s = new Square(5,10);
    echo '<p>'.print_r($s->getDimensions()).'</p>';
    echo '<p>Resizing the Square by 80%</p>';
    $s->resize(.8);
    echo '<p>'.print_r($s->getDimensions()).'</p>';
    echo '<p>Resizing the Square by -20%</p>';
    $s->resize(-.2);
    echo '<p>'.print_r($s->getDimensions()).'</p>';
    echo html_footer();
?>