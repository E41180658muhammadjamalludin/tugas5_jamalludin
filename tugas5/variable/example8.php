<?php
$x = 5;
$y = 10;

function myTest() {
    // Mengakses variabel diluar fungsi juga dapat dengan perintah $GLOBALS[''] didalam tanda '' dimasukkan nama variabel yang ingin diakses
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>