<?php
$x = 5; // global scope

function myTest() {
    // akan error karena hanya dapat membaca variable yang dideklarasikan di dalam function
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>