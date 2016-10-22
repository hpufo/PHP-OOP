<?php
    require_once('../EquilateralTriangle.php');
    require_once('utils.php');
    
    echo html_header("Equilateral Triangle");
    $et = new EquilateralTriangle(15);
    echo '<p>'.print_r($et->getDimensions()).'</p>';
    echo '<p>Resizing the Equilateral Triangle by 75%</p>';
    $et->resize(.75);
    echo '<p>'.print_r($et->getDimensions()).'</p>';
    echo '<p>Resizing the Equilateral Triangle by -25%</p>';
    $et->resize(-.25);
    echo '<p>'.print_r($et->getDimensions()).'</p>';
    echo html_footer();
?>