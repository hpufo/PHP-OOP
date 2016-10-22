<?php
    require_once('../Parallelogram.php');
    require_once('utils.php');
    
    echo html_header("Parallelogram");
    $p = new Parallelogram(8,10,9);
    echo '<p>'.print_r($p->getDimensions()).'</p>';
    echo '<p>Resizing the Parallelogram by 20%</p>';
    $p->resize(.2);
    echo '<p>'.print_r($p->getDimensions()).'</p>';
    echo '<p>Resizing the Parallelogram by -30%</p>';
    $p->resize(-.3);
    echo '<p>'.print_r($p->getDimensions()).'</p>';
    echo html_footer();
?>