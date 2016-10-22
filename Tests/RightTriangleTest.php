<?php
    require_once('../RightTriangle.php');
    require_once('utils.php');
    
    echo html_header("Right Triangle");
    $rt = new RightTriangle(5,10);
    echo '<p>'.print_r($rt->getDimensions()).'</p>';
    echo '<p>Resizing the Right Triangle by 30%</p>';
    $rt->resize(.3);
    echo '<p>'.print_r($rt->getDimensions()).'</p>';
    echo '<p>Resizing the Right Triangle by -50%</p>';
    $rt->resize(-.5);
    echo '<p>'.print_r($rt->getDimensions()).'</p>';
    echo html_footer();
?>