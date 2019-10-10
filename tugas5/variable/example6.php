<?php
function myTest() {
    $x = 5; // local scope yaitu hanya diakses didalam fungsi saja.
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// error karena tidak menemukan variable x 
echo "<p>Variable x outside function is: $x</p>";
?>