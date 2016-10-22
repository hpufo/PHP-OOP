<?php
    require_once('../Rectangle.php');
    require_once('utils.php');
    
    echo html_header("Rectangle");
    $r = new Rectangle(5,10);
    echo '<p>'.print_r($r->getDimensions()).'</p>';
    echo '<p>Resizing the Rectangle by 10%</p>';
    $r->resize(.1);
    echo '<p>'.print_r($r->getDimensions()).'</p>';
    echo '<p>Resizing the Rectangle by -50%</p>';
    $r->resize(-.5);
    echo '<p>'.print_r($r->getDimensions()).'</p>';
    echo html_footer();
?>