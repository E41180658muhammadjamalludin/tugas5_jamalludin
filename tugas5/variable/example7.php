<?php
$x = 5;
$y = 10;

function myTest() {
    //dengan keyword global maka dapat mengakses variabel diluar fungsi
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>