<?php
function myTest() {
     // keyword static digunakan untuk tidak diset dari awal lagi ketika fungsi dipanggil lagi
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 